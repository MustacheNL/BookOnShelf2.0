<?php
require("private/connection.php");  /*DB info & connectie*/
echo "<h2>Hier onder ziet u boeken die beschikbaar zijn</h2>";

/* Zet het boek op gehuurd */
if(isset($_GET['hire'])) {
    $result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0'");
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $id = $_GET['hire'];
    $stmt = $conn->prepare("UPDATE `books` SET `hired` = '1', hired_date = CURRENT_DATE WHERE `id` = $id");
    $stmt->execute();
    header('location: index.php?page=boekenlijst&msg=success');
}

/* Maakt de table aan met sorteer op href en tooltips */
echo "
<table class='table-responsive, table-bordered'>
    <tr>
        <th><a href=\"/index.php?page=boekenlijst&name\" data-toggle=\"tooltip\" title=\"Sorteren op alfabetische volgorde\"><b>Boeknaam</b></th> 
        <th><a href=\"/index.php?page=boekenlijst&author\" data-toggle=\"tooltip\" title=\"Sorteren op alfabetische volgorde\"><b>Auteur</b></th> 
        <th><a href=\"/index.php?page=boekenlijst&date\" data-toggle=\"tooltip\" title=\"Sorteren op datum\"><b>Publicatiedatum</b></th> 
        <th><a href=\"/index.php?page=boekenlijst&info\" data-toggle=\"tooltip\" title=\"Sorteren op alfabetische volgorde\"><b>Informatie</b></th>
    </tr>";
//sorteer systeem
if (isset($_GET['name'])){
    $result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0' ORDER BY name");;
    $stmt->execute();
} elseif(isset($_GET['author'])) {
    $result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0'ORDER BY author");
    $stmt->execute();
} elseif(isset($_GET['date'])) {
    $result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0'ORDER BY releasedate");
    $stmt->execute();
} elseif(isset($_GET['info'])) {
    $result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0'ORDER BY info");
    $stmt->execute();
} else {
    $result = $stmt = $conn->prepare("SELECT * FROM books WHERE hired = '0'");
    $stmt->execute();
}


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
        <td><a href=\"/index.php?page=boekenlijst&hire=$id\"> <button class='btn-default'type=\"submit\" form=\"form1\" value=\"$id\" onclick=\"return confirm('weet je zeker dat je het boek wilt lenen?')\"><strong>$name huren</strong></button></a></td>
        </tr>";
}
//succes bericht voor boek lenen
if(isset($_GET['msg']) && $_GET['msg'] == "success") {
    echo "<div class=\"alert alert-success\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Success:</span>
    Het boek is succesvol aan je geleend!
    </div>";
}
echo "</table>";
?>