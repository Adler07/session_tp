<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <label>Email</label>
        <input class="size" type="email" name="email">
        <label>Mot de passe</label>
        <input class="size" type="password" name="mdp">
        <input class="size_button" type="submit" value="Se connecter" name="connexion">
        <?php

          
          // Si l'utilisateur est déjà connecté, on l'empêche de retourner sur le formulaire tout en ayant une session d'ouverte
          // L'utilisateur devra se déconnecter avec le bouton dans la page contenu.php
          if (isset($_SESSION["name"])) {
            header("Location:contenu.php");}
              ?>
</body>
</html>