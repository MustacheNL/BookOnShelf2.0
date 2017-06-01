<?php
require("private/connection.php");  /*DB info & connectie*/
echo "<h2>Hier komt een lijst met boeken die u kunt huren</h2>";

/* Prepared de SQL query en voert de query uit */
$result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0'");
$stmt->execute();

/* Zet het boek op gehuurd */
if(isset($_GET['hire'])) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $id = $_GET['hire'];
    $stmt = $conn->prepare("UPDATE `books` SET `hired` = '1', hired_date = CURRENT_DATE WHERE `id` = $id");
    $stmt->execute();
    header('location: index.php?page=boekenlijst&msg=success');
}

if(isset($_GET['msg']) && $_GET['msg'] == "success") {
    echo "<div class=\"alert alert-success\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Success:</span>
    Het boek is succesvol aan je geleend!
    </div>";
}

/* Maakt de table aan */
echo "
<table class='table-responsive, table-bordered'>
    <tr>
        <th><b>Boeknaam</b></th> 
        <th><b>Auteur</b></th> 
        <th><b>Publicatiedatum</b></th> 
        <th><b>Informatie</b></th>
    </tr>";

/* De while loop die de boeken weergeeft op de pagina */
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $name = $row['name'];
    $author = $row['author'];
    $releasedate = $row['releasedate'];
    $info = $row['info'];

    /* Geeft structuur aan de lijst */
    echo "<tr>
        <td>$name</td>
        <td>$author</td>
        <td>$releasedate</td>
        <td>$info</td>
        <td><a href=\"/index.php?page=boekenlijst&hire=$id\"> <button class='btn-default' type=\"submit\" form=\"form1\" value=\"$id\">Huren</button></a></td>
        </tr>";
}

echo "</table>";
?>