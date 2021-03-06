<?php
session_start();
include ('class/class.session.php');
$auth_user = new USER();
echo "<h2>Hier onder ziet u boeken die beschikbaar zijn</h2>";

/* Sorteert de boeken op waar de gebruiker geklikt heeft */
if (isset($_GET['name'])){
    $stmt = $auth_user->runQuery("SELECT * FROM books WHERE hired = '0' ORDER BY name");
} elseif(isset($_GET['author'])) {
    $stmt = $auth_user->runQuery("SELECT * FROM books WHERE hired = '0'ORDER BY author");
} elseif(isset($_GET['date'])) {
    $stmt = $auth_user->runQuery("SELECT * FROM books WHERE hired = '0'ORDER BY releasedate");
} elseif(isset($_GET['info'])) {
    $stmt = $auth_user->runQuery("SELECT * FROM books WHERE hired = '0'ORDER BY info");
} else {
    $stmt = $auth_user->runQuery("SELECT * FROM books WHERE hired = '0'");
}
$stmt->execute();

/* Succes bericht dat het boek is geleend! */
if(isset($_GET['msg']) && $_GET['msg'] == "success") {
    echo "<div class=\"alert alert-success\" style=\"text-align: center\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Success</span>
    Het boek is succesvol aan je geleend!
    </div>";
}

/* Succes bericht dat het boek is verwijderd */
if (isset($_GET['msg']) && $_GET['msg'] == "deleted") {
    echo "<div class=\"alert alert-success\" style='text-align: center' role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Success</span>
    Het boek is succesvol verwijderd!
    </div>";
}

/* Maakt de table aan met sorteer op href en tooltips */
echo "
<div class='container'>
<table class='table-responsive, table-bordered'>
    <tr>
        <th><a href=\"?page=booklist&name\" data-toggle=\"tooltip\" title=\"Sorteren op alfabetische volgorde\"><b>Boeknaam</b></th> 
        <th><a href=\"?page=booklist&author\" data-toggle=\"tooltip\" title=\"Sorteren op alfabetische volgorde\"><b>Auteur</b></th> 
        <th><a href=\"?page=booklist&date\" data-toggle=\"tooltip\" title=\"Sorteren op datum\"><b>Release</b></th> 
        <th><a href=\"?page=booklist&info\" data-toggle=\"tooltip\" title=\"Sorteren op alfabetische volgorde\"><b>Informatie</b></th>
        <th>Huren</th>
        <th>Verwijderen</th>
    </tr>";

/* De while loop die de boeken weergeeft op de pagina */
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'];
    $name = $row['name'];
    $author = $row['author'];
    $releasedate = $row['releasedate'];
    $info = mb_strimwidth($row['info'], 0, 100, "...");


    /* Geeft structuur aan de lijst */
    echo "<tr>
        <td class='name'>$name</td>
        <td>$author</td>
        <td class='date'>$releasedate</td>
        <td class='info'>$info</td>
        <td> <a href=\"php/hirebook.php?page=booklist&hire=$id\"> <button class='btn-success'type=\"submit\" form=\"form1\" value=\"hire\" onclick=\"return confirm('Weet je zeker dat je dit boek wilt lenen? $name. Door: $author')\"><strong>Huren</strong></button></a></td>
        <td><a href=\"php/deletebook.php?page=booklist&delete=$id\"> <button class='btn-danger' type=\"submit\" form=\"form2\" value=\"delete\" onclick=\"return confirm('Weet je zeker dat je dit boek wilt verwijderen? $name. Door: $author')\"><strong>Verwijderen</strong></button></a></td>
        
         
        </tr>";
}
echo "</table>";
echo "</div>";
?>