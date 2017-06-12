 <?php
session_start();
 $login = new USER();
 if(isset($_POST['btn-login'])) {
     $uname = strip_tags($_POST['txt_uname_email']);
     $umail = strip_tags($_POST['txt_uname_email']);
     $upass = strip_tags($_POST['txt_password']);

     if($login->login($uname,$umail,$upass)) {
         $login->redirect('?page=home');
     } elseif($uname == "") {
         $error = "Provide a username or email!";
     } elseif(!$uname == "" && $upass == "") {
         $error = "Provide a password!";
     } else {
         $error = "Wrong credentials!"; // Hij checked hier niet of dat de data klopt
     }
 }
 ?>

 <head>
     <title>Index</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/signin.css" rel="stylesheet">
 </head>

 <body>
     <div class="container">
         <div id="error">
             <?php
             if(isset($error)) {
                 ?>
                 <span class="mdl-chip mdl-chip--contact">
                                    <span class="mdl-chip__contact mdl-color--red mdl-color-text--white">!</span>
                                    <span class="mdl-chip__text"><?php echo $error; ?></span>
                                </span>
             <?php } ?>
         </div>
         <form action="index.php" method="post">
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="text" id="sample1" name="txt_uname_email">
                 <label class="mdl-textfield__label" for="sample1">Gebruikersnaam of E-mail...</label>
             </div>
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="password" id="sample1" name="txt_password">
                 <label class="mdl-textfield__label" for="sample1">Wachtwoord...</label>
             </div>
             <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn btn-default"  type="submit" name="btn-login" style="float: left";>
                 <i class="glyphicon glyphicon-log-in"></i> Inloggen
             </button>
         </form>
         <form action="includes/register.inc.php" method="post">
         <button href="includes/register.inc.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn btn-default 2"  name="btn-register" style="float: right;">
             <i class="glyphicon glyphicon-log-in"></i> Registeren
         </button>
         </form>
<!--         <form class="form-signin">-->
<!--             <h2 class="form-signin-heading">Inloggen</h2>-->
<!--             <label class="sr-only">Gebruikersnaam...</label>-->
<!--             <input id="inputEmail" class="form-control" placeholder="Gebruikersnaam...">-->
<!--             <label class="sr-only">Wachtwoord...</label>-->
<!--             <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord...">-->
<!--             <div class="checkbox">-->
<!--                 <label>-->
<!--                     <input type="checkbox" value="remember-me"> Onthoud mij-->
<!--                 </label>-->
<!--             </div>-->
<!--             <button class="btn btn-lg btn-primary btn-block" type="submit">Inloggen</button>-->
<!--         </form>-->
     </div>
 </body>