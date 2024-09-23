<?php 
session_start(); // Démarrer session

    $users = [
        [
        "email" => "user1@example.com",
        "password" => "password123",
        "name" => "Jean",
        "surname" => "Dupont",
        "role" => "admin"
        ],
        [
        "email" => "user2@example.com",
        "password" => "password456",
        "name" => "Marie",
        "surname" => "Dupont",
        "role" => "user"
        ],
    ];

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Si le serveur reçoit une requête post
    $email = $_POST["email"];
    $password = $_POST["mdp"];

    foreach ($users as $user) {
        if ($user["email"] == $email && $user["password"] == $password) {
           $_SESSION["name"] = $user["name"];
           $_SESSION["surname"] = $user["surname"];
           $_SESSION["role"] = $user["role"];

           // Rediriger vers la page d'accueil après connexion réussie
           header("Location: contenu.php");
           exit;
        }
    }
    echo "Email ou mot de passe incorrect";
    header("Refresh:3, URL=index.php"); // délai de 3 secondes le temps que l'utilisateur puisse voir le message
} 