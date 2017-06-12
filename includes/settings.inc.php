<h2>Hier kunt u uw account aanpassen</h2>
<?php
session_start();
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
$result = $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));

/* While loop alles ophalen */
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $street = $row['street'];
    $housenumber = $row['housenumber'];
    $housenumber_ext = $row['housenumber_ext'];
    $zipcode = $row['zipcode'];
    $city = $row['city'];
    $country = $row['country'];
    $registerdate = $row['registerdate'];
    $gender = $row['gender'];
    $rank = $row['rank'];
}

/* Als er op de knop is gedrukt */
if (isset($_POST['btn-submit'])) {
    if (preg_match('~[0-9]~', $_POST['txt_street'])) {
        $error[] = "Je straat mag geen nummers bevatten!";
    } elseif (!ctype_digit($_POST['txt_housenumber'])) {
        $error[] = "Je huisnummer moet wel nummers bevatten!";
    }/* elseif() {
        $error[] = "";
    } */else {
        $stmt = $auth_user->runQuery("UPDATE users SET `street` = :street, `housenumber` = :housenumber, `housenumber_ext` = :housenumber_ext, `zipcode` = :zipcode, `city` = :city, `country` = :country, `gender` = :gender WHERE `user_id` = :user_id");
        $stmt->execute(array(':street' => $_POST['txt_street'], ':housenumber' => $_POST['txt_housenumber'], ':housenumber_ext' => $_POST['txt_housenumber_ext'], ':zipcode' => $_POST['txt_zipcode'], ':city' => $_POST['txt_city'], ':country' => $_POST['txt_country'], ':gender' => $_POST['txt_gender'], ':user_id' => $user_id));
        header("Location: /settings.php");
    }
}
?>