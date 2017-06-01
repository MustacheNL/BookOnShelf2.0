<?php
require("private/connection.php");
echo "<h2>Hier komt een lijst met boeken die u kunt huren</h2>";

/* Prepared de SQL query en voert de query uit */
$result = $stmt = $conn->prepare("SELECT * FROM books");
$stmt->execute();

/* De while loop die de boeken weergeeft op de pagina */
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $name = "<td>" . $row['name'] . "</td>";
    $author = "<td>" . $row['author'] . "</td>";
    $releasedate = "<td>" . $row['releasedate'] . "</td>";
    $info = "<td>" . $row['info'] . "</td>";

    echo "<table>
    <td><b>Boeknaam</b></td> <tr>$name</tr>
    <td><b>Auteur</b></td> <tr>$author</tr>
    <td><b>Publicatiedatum</b></td> <tr>$releasedate</tr>
    <td><b>Informatie</b></td> <tr>$info</tr><br/>
    </table>";
}