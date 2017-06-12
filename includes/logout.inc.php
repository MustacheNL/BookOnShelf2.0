<?php
session_start();
$user_logout = new USER();

if(isset($_GET['page']) && $_GET["page"] == "logout") {
    $user_logout->logout();
    $user_logout->redirect('?page=index');
}
?>