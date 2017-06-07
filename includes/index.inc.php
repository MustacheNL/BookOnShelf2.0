 <?php
 if(isset($_POST['btn-login'])) {
     $uname = strip_tags($_POST['txt_uname_email']);
     $umail = strip_tags($_POST['txt_uname_email']);
     $upass = strip_tags($_POST['txt_password']);

     if($login->doLogin($uname,$umail,$upass)) {
         $login->redirect('?page=home');
     } elseif($uname == "") {
         $error = "Provide a username or email!";
     } elseif(!$uname == "" && $upass == "") {
         $error = "Provide a password!";
     } else {
         $error = "Wrong credentials!";
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
         <form action="index.php" method="post">
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="text" id="sample1" name="txt_uname_email">
                 <label class="mdl-textfield__label" for="sample1">Gebruikersnaam of E-mail...</label>
             </div>
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" type="password" id="sample1" name="txt_password">
                 <label class="mdl-textfield__label" for="sample1">Wachtwoord...</label>
             </div>

             <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn btn-default 2" href="register.php" name="btn-register" style="float: right;">
                 <i class="glyphicon glyphicon-log-in"></i> <a href="register.php" style="text-decoration: none; color: black;">Registeren</a>
             </button>
             <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored, btn btn-default" type="submit" name="btn-login" style="float: left";>
                 <i class="glyphicon glyphicon-log-in"></i> Inloggen
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