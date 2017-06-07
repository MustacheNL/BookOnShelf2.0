<?php
include('../private/connection.php');
include('../class/class.user.php');
$auth_user = new USER();
session_start();

/* Kijkt of de GET hire bevat en zet het boeken op gehuurd */
    $id = $_GET['hire'];
    $stmt = $auth_user->runQuery("UPDATE `books` SET `hired` = '1', hired_date = CURRENT_DATE WHERE `id` = $id");
    $stmt->execute();
    header('location: ../index.php?page=booklist&msg=success');
?>