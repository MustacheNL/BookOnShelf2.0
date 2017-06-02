<?php
include('../private/connection.php');
session_start();
/* Kijkt of de GET hire bevat en zet het boeken op gehuurd */
    $id = $_GET['hire'];
    $stmt = $conn->prepare("UPDATE `books` SET `hired` = '1', hired_date = CURRENT_DATE WHERE `id` = $id");
    $stmt->execute();
    header('location: ../index.php?page=booklist&msg=success');
?>