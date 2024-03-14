<?php
$serveur = "localhost"; // ou l'adresse IP si différente
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "lautrecinema";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

?>
