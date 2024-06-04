<?php
$servername = "localhost";
$username = "root"; // Utilisateur par défaut
$password = ""; // Mot de passe par défaut
$dbname = "mglsi_news"; // Nom de votre base de données

// Créez la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
