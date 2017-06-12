<h2>Hier kunt u boeken toevoegen</h2>
<?php
require 'class/class.session.php';

$auth_user = new USER();
$user = new USER();
$result = $stmt = $auth_user->runQuery("SELECT * FROM books");
$row = $result->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['btn-signup'])) {
    $bname = strip_tags($_POST['txt_bname']);
    $bauthor = strip_tags($_POST['txt_bauthor']);
    $breleasedate = strip_tags($_POST['txt_breleasedate']);
    $binfo = strip_tags($_POST['txt_binfo']);
    if ($bname == "" || $bauthor == "" || $breleasedate == "" || $binfo == "") {
        $error[] = "Je hebt niet alle velden ingevuld!";
    } else {
        try {
            $stmt = $auth_user->runQuery("SELECT name, author, info FROM books WHERE name=:bname OR author=:bauthor OR info=:binfo");
            $stmt->execute(array(':bname' => $bname, ':bauthor' => $bauthor, ':binfo' => $binfo));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row['name'] == $bname) {
                $error[] = "Deze naam bestaat al!";
            } else {
                if ($user->addBook($bname, $bauthor, $breleasedate, $binfo)) {
                    header('location: ../index.php?page=addbook&msg=success');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
if(isset($_GET['msg']) && $_GET['msg'] == "success") {
    echo "<div class=\"alert alert-success\" role=\"alert\">
    <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Success:</span>
    Het boek is succesvol toegevoegd!
    </div>"; }
?>

        <div class="container">
            <div class="signin-form">
                <div class="container">
                    <form method="post" class="form-signin">
                        <h4 class="form-signin-heading">Voeg een boek toe</h4>
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
//                            ?><!--succes msg-->
                            <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--green mdl-color-text--white">:D</span>
                                <span class="mdl-chip__text">Je hebt met succes een boek toegevoegd. <a
                                            href='booklist.php'>here</a>!</span>
                            </span>
                        <?php } ?>
<!--                            fields voor het invullen van de info van het boek.-->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bname">
                            <label class="mdl-textfield__label" for="sample1">Boek naam...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_bauthor">
                            <label class="mdl-textfield__label" for="sample1">Boek auteur...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input placeholder="YYYY-MM-DD" max="*9l" class="mdl-textfield__input" type="date" id="sample1" name="txt_breleasedate">
                            <label class="mdl-textfield__label" for="sample1">Uitgave datum...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_binfo">
                            <label class="mdl-textfield__label" for="sample1">Boek info...</label>
                        </div>

                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored,  btn-primary"
                                type="submit" name="btn-signup">
                            <i class="glyphicon glyphicon-open-file"></i> Voeg toe
                        </button>
                    </form>

                    <br>
                    <br/>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
?>