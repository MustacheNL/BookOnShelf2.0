<?php
require("private/connection.php");  /*  PDO connectie */
require("class/class.user.php");
$auth_user = new USER();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "index";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title/>Index</title>
        <link rel="icon" href="images/favicon.ico">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>

    <body>
        <?php if($page != "index") {
            include "includes/navbar.inc.php";
        } ?>
        <div class="jumbotron">
            <?php include "includes/$page.inc.php"; ?>
        </div>

        <footer class="footer">
            BookOnShelf version 2.0 - Made by Nyma & Jurgen. ©2017
        </footer>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>