<link rel="stylesheet" href="style.css">
<?php
require 'db.php';
$pdo = connectDB();

// On vérifie si la requete a été envoyée par POST et on récupère les données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
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

    // On met à jour les données
    $stmt = $pdo->prepare("UPDATE contacts SET nom = ?, email = ?, telephone = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $telephone, $id]);
    header('Location: index.php');
    exit();
}
?>
