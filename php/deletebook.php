<?php
include('../private/connection.php');
include('../class/class.user.php');
$auth_user = new USER();
session_start();

/* Kijkt of de GET delete bevat en verwijderd het boek */
    $id = $_GET['delete'];
    $stmt = $auth_user->runQuery("DELETE FROM books WHERE id =" .$id);
    $stmt->execute();
    header('location: ../index.php?page=booklist&msg=deleted');
?>