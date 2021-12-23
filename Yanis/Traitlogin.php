<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=yanis', 'root', '');

if(isset($_POST['login-btn'])) {
   $userconnect = htmlspecialchars($_POST['username']);
   $mdpconnect = $_POST['password'];
   if(!empty($userconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
      $requser->execute(array($userconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['username'] = $userinfo['username'];
         header("Location: dashbord.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>