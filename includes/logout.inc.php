<?php
session_start();
require_once('class/class.session.php');
require_once('class/class.user.php');
$user_logout = new USER();

if(isset($_GET['page']) && $_GET["page"] == "logout") {
    $user_logout->logout();
    $user_logout->redirect('?page=index');
}
?>