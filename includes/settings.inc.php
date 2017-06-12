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
    } */ else {
        $stmt = $auth_user->runQuery("UPDATE users SET `street` = :street, `housenumber` = :housenumber, `housenumber_ext` = :housenumber_ext, `zipcode` = :zipcode, `city` = :city, `country` = :country, `gender` = :gender WHERE `user_id` = :user_id");
        $stmt->execute(array(':street' => $_POST['txt_street'], ':housenumber' => $_POST['txt_housenumber'], ':housenumber_ext' => $_POST['txt_housenumber_ext'], ':zipcode' => $_POST['txt_zipcode'], ':city' => $_POST['txt_city'], ':country' => $_POST['txt_country'], ':gender' => $_POST['txt_gender'], ':user_id' => $user_id));
        header("Location: index.php?page=settings");
    }
}
?>

<main class="mdl-layout__content mdl-color--grey-100" style="display: block;">
    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid"
         style="margin-top: 50px">
        <form method="post" class="form-signin">
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    ?>
                    <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                                <span class="mdl-chip__text"><?php echo $error; ?></span>
                            </span>
                    <?php
                }
            } ?>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_street"
                       value="<?php echo $street; ?>">
                <label class="mdl-textfield__label" for="sample1">Straat</label>
            </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
                     style="width 35%; float: left; overflow: hidden;">
                    <input class="mdl-textfield__input" type="text" id="sample1"
                           name="txt_housenumber"
                           value="<?php echo $housenumber; ?>">
                    <label class="mdl-textfield__label" for="sample1">Huisnummer</label>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_housenumber_ext"
                           value="<?php echo $housenumber_ext; ?>">
                    <label class="mdl-textfield__label" for="sample1">Toevoeging</label>
                </div>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_zipcode"
                       value="<?php echo $zipcode; ?>">
                <label class="mdl-textfield__label" for="sample1">Postcode</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_city"
                       value="<?php echo $city; ?>">
                <label class="mdl-textfield__label" for="sample1">Stad</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample1" name="txt_country"
                       value="<?php echo $country; ?>">
                <label class="mdl-textfield__label" for="sample1">Land</label>
            </div>
            Gender
            <select name="txt_gender">

                <option <?php if ($gender === "0") {
                    echo "selected='selected'";
                } ?> value="0">Man
                </option>
                <option <?php if ($gender === "1") {
                    echo "selected='selected'";
                } ?> value="1">Vrouw
                </option>
                <option <?php if ($gender === "2") {
                    echo "selected='selected'";
                } ?> value="2">Apache Helicopter
                </option>
                <option <?php if ($gender === "3") {
                    echo "selected='selected'";
                } ?> value="3">Privé
                </option>
            </select>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="sample1" disabled name="txt_register"
                       value="<?php echo $registerdate; ?>">
                <label class="mdl-textfield__label" for="sample1">Registratiedatum</label>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary"
                    type="submit" name="btn-submit">
                <i class="glyphicon glyphicon-open-file"></i>Submit
            </button>
        </form>
    </div>
