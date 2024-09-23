<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="center">
<?php
//Vérifier si l'utilisateur est connecté
if (isset($_SESSION["name"])) {
    echo "Bonjour, " . $_SESSION["name"] . " " .  
    $_SESSION["surname"] . "! <br/>Vous êtes connecté en tant que " .
    $_SESSION["role"] . ".<br/>";
    echo "<a href='logout.php'>Se déconnecter</a>";
} else {
    //Si l'user n'est pas connecté, rediriger vers la page de connexion
    echo "Erreur : aucune informations liées à la session. Redirection vers le formulaire de connexion.";
    header("Refresh: 3; URL=index.php");
    exit;
}
?>
</div>
</body>
</html>
