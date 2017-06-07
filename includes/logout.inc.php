<?php
session_start();
require_once('class/class.session.php');
require_once('class/class.user.php');
$user_logout = new USER();

if(isset($_GET['logout']) && $_GET['logout']=="true") {
    $user_logout->doLogout();
    $user_logout->redirect('?page=index');
}
?>