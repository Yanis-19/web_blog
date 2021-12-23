<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/993229fa1c.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="css/style.css">

  <title>Register</title>
</head>

<body>
 
<?php include("header.php"); ?>
<?php
    session_start();
$connexion= mysqli_connect("localhost","root","","yanis");


if(isset($_POST['register-btn'])) {
   $pseudo = htmlspecialchars($_POST['user']);
   $mail = htmlspecialchars($_POST['email']);
   $mdp = sha1($_POST['pass']);
   $mdp2 = sha1($_POST['passConfirm']);
   if(!empty($_POST['user']) AND !empty($_POST['email']) AND !empty($_POST['pass']) AND !empty($_POST['passConfirm'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         $req='SELECT * FROM membres WHERE email=\'' . $_POST['email'] . '\'';
               $reqs=mysqli_query($connexion,$req);
               $mailexist = mysqli_num_rows($reqs);
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr= "INSERT INTO membres (nom, password, email) VALUES('$pseudo', '$mdp', '$mail')";
                     mysqli_query($connexion,$insertmbr);
                     mysqli_close($connexion);
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
   
         ?>
<div class="auth-content">

    <form action="register.php" method="post">
      <h2 class="form-title">Register</h2>


      <div>
        <label>Username</label>
        <input type="text" name="username" class="text-input">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input">
      </div>
      <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
      </div>
      <p>Or <a href="login.php">Sign In</a></p>
    </form>

  </div>
</body>
</html>