<?php
session_start();

// Détruire toutes les donnée de session ->$_COOKIE
session_unset(); // Efface variables de session
session_destroy(); // Detruit la session

// Rediriger vers la page de connexion après déconnexion
header("location: index.php");
exit;

?>