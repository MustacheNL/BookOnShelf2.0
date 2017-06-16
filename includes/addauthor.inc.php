<h2>Hier kunt u schrijvers toevoegen</h2>
<?php
session_start();
include('class/class.session.php');
$auth_user = new USER();
$user = new USER();
$result = $stmt = $auth_user->runQuery("SELECT * FROM author");
$row = $result->fetch(PDO::FETCH_ASSOC);


/* Als er op de knop is gedrukt (submit) */
if (isset($_POST['btn-signup'])) {
    $bauthor = strip_tags($_POST['txt_bauthor']);
    if ($bauthor == "") {
        $error[] = "Je hebt geen schrijver ingevuld!";
    } else {
        try {
            $stmt = $auth_user->runQuery("SELECT * FROM author WHERE author=:bauthor");
            $stmt->execute(array('bauthor' => $bauthor));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row['bauthor'] == $bauthor) {
                $error[] = "Deze schrijver is al bekend bij ons.";
            } else {
                if ($user->addauthor($bauthor)) {
                    header('location: ../index.php?page=addauthor&msg=success');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

/* Als de get bericht is dan weergeeft die dat het gelukt is */
if (isset($_GET['msg']) && $_GET['msg'] == "success") {
    echo "<div class=\"alert alert-success\" style=\"text-align: center\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\"  aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Success:</span>
    de schrijver is succesvol toegevoegd!
    </div>";
}
?>

<div class="container">
    <div class="signin-form">
        <div class="container">
            <form method="post" class="form-signin">
                <h4 class="form-signin-heading">Voeg een schrijver toe</h4>
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        ?>
                        <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--red mdl-color-text--white"></span>
                                <span class="mdl-chip__text"><?php echo $error; ?></span>
                            </span>
                        <?php
                    }
                } else if (isset($_GET['joined'])) {
                    header("refresh:5;url=index.php");
                    ?>
                    <!-- Succes bericht -->
                    <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--green mdl-color-text--white" style="text-align: center"></span>
                                <span class="mdl-chip__text">Je hebt met succes een schrijver toegevoegd. <a
                                        href='booklist.php'>here</a>!</span>
                            </span>
                <?php } ?>
                <!-- Fields voor het invullen van de info van het boek -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bauthor">
                    <label class="mdl-textfield__label" for="sample1">schrijver</label>
                </div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary"
                        type="submit" name="btn-signup">
                    <i class="glyphicon glyphicon-open-file"></i> Voeg toe
                </button>
            </form>