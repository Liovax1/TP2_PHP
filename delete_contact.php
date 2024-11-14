<link rel="stylesheet" href="style.css">
<?php
require 'db.php';
$pdo = connectDB();

// Methode de suppression d'un contact
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
$stmt->execute([$id]);
header('Location: index.php');
?>
