<?php
require("private/connection.php");  /*DB info & connectie*/
echo "<h2>Hier komt een lijst met boeken die u kunt huren</h2>";

/* Prepared de SQL query en voert de query uit */
$result = $stmt = $conn->prepare("SELECT * FROM books");
$stmt->execute();

if(isset($_GET['hire'])) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $id = $row['id'];
    $stmt = $conn->prepare("UPDATE `books` SET `hired` = 1 WHERE `id` = $id");
    $stmt->execute();
    echo "XD";
} else {
    echo "NO XD";
}

/* Maakt de table aan */
echo "
<table>
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