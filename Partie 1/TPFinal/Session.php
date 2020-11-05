<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:TPFinal.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue dans votre espace personnel";
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         a{
            color:#DD7700;
            text-decoration:none;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
      <h1><?php echo $bienvenue?></h1>
      [ <a href="Deconnexion.php">Se déconnecter</a> ]
   </body>
</html>