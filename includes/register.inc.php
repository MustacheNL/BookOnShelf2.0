<?php
$page = "Registreren";
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
                    $user->redirect('?page=register&joined');
                }
            }
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
<html lang="en">
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            <h3>BookOnShelf</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
    </header>
    <main class="mdl-layout__content">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
            <div class="container">
                <div class="signin-form">
                    <div class="container">
                        <form action="index.php?page=register" method="post" class="form-signin">
                            <h2 class="form-signin-heading">Sign Up</h2><hr />
                            <?php
                            if(isset($error)) {
                                foreach($error as $error) {
                                    ?>
                                    <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                                <span class="mdl-chip__text"><?php echo $error; ?></span>
                            </span>
                                    <?php
                                }
                            } else if(isset($_GET['joined'])) {
                                header( "refresh:5;url=index.php?page=home" );
                                ?>
                                <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--green mdl-color-text--white">:D</span>
                                <span class="mdl-chip__text">Succesfully registered, you will be redirected to the home in 5 seconds. If not click <a href='index.php'>here</a>!</span>
                            </span>
                            <?php } ?>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_uname" value="<?php if(isset($error)){echo $uname;}?>" >
                                <label class="mdl-textfield__label" for="sample1">Username...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_umail" value="<?php if(isset($error)){echo $umail;}?>" >
                                <label class="mdl-textfield__label" for="sample1">E-mail...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="sample1" name="txt_upass" >
                                <label class="mdl-textfield__label" for="sample1">Password...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="sample1" name="txt_upass2" >
                                <label class="mdl-textfield__label" for="sample1">Password again...</label>
                            </div>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary" type="submit" name="btn-signup">
                                <i class="glyphicon glyphicon-open-file"></i> Sign up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</html>