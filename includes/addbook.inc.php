<h2>Hier kunt u boeken toevoegen</h2>
<?php
require("private/connection.php");
$result = $stmt = $conn->prepare("SELECT * FROM books");
$row = $result->fetch(PDO::FETCH_ASSOC);
?>
        <div class="container">
            <div class="signin-form">
                <div class="container">
                    <form method="post" class="form-signin">
                        <h4 class="form-signin-heading">Voeg een boek toe</h4>
                        <hr/>
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
                        } else if (isset($_GET['joined'])) {
                            header("refresh:5;url=index.php");
                            ?>
                            <span class="mdl-chip mdl-chip--contact">
                                <span class="mdl-chip__contact mdl-color--green mdl-color-text--white">:D</span>
                                <span class="mdl-chip__text">Je hebt met succes een boek toegevoegd. <a
                                            href='booklist.php'>here</a>!</span>
                            </span>
                        <?php } ?>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_name">
                            <label class="mdl-textfield__label" for="sample1">Boek naam...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_author">
                            <label class="mdl-textfield__label" for="sample1">Boek auteur...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_releasedate">
                            <label class="mdl-textfield__label" for="sample1">Boek uitgavedatum...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample1" name="txt_info">
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
</body>
</html>