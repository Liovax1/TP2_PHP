<link rel="stylesheet" href="style.css">
<?php
require 'db.php'; // On inclut le fichier
$pdo = connectDB(); // On se connecte à la base

// On vérifie si la requete a été envoyée par POST et on récupère les données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // On vérifie que les champs ne sont pas vides
    if (empty($nom) || empty($email) || empty($telephone)) {
        die("Tous les champs sont requis.");
    }

    // On vérifie que l'email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email invalide !");
    }


    //On vérifie que le numéro de téélephone est valide
    if (!preg_match('/^\d{10}$/', $telephone)) {
        die("Numéro de téléphone invalide. Il doit contenir 10 chiffres.");
    }


    // Et on insere les données dans la base de données
    $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, telephone) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $telephone]);
    header('Location: index.php');
}
?>
