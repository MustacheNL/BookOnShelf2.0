<?php
$page = "Registreren";
require_once('../class/class.user.php');
include '../private/connection.php';
$user = new USER();

if($user->is_loggedin()!="") {
    $user->redirect('/index.php');
}

if(isset($_POST['btn-signup'])) {
    $uname = strip_tags($_POST['txt_uname']);
    $umail = strip_tags($_POST['txt_umail']);
    $upass = strip_tags($_POST['txt_upass']);

    if($uname == "") {
        $error[] = "Provide a username!";
    } else if($umail == "") {
        $error[] = "Provide a e-mail!";
    } else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
        $error[] = 'Provide a valid e-mail!';
    } else if($upass == "") {
        $error[] = "Provide a password!";
    } else if(strlen($upass) < 6) {
        $error[] = "Password must be atleast 6 characters!";
    } else if($_POST['txt_upass']!=$_POST['txt_upass2']) {
        $error[] = "The entered passwords are not the same!";
    } else {
        try {
            $stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
            $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
            $row=$stmt->fetch(PDO::FETCH_ASSOC);

            if($row['user_name']==$uname) {
                $error[] = "Username already taken!";
            } else if($row['user_email']==$umail) {
                $error[] = "E-mail already taken!";
            } else {
                if($user->register($uname,$umail,$upass)){
                    $user->redirect('?page=register.php&joined');
                }
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}