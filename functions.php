<link rel="stylesheet" href="style.css">
<?php
require 'db.php';

// Fonction d'ajout d'un contact
function addContact($nom, $email, $telephone) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, telephone) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $telephone]);
}

// Fonction de recuperation d'un contact
function getContact($id) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}


// Fonction d'edition d'un contact
function updateContact($id, $nom, $email, $telephone) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("UPDATE contacts SET nom = ?, email = ?, telephone = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $telephone, $id]);
}

// Fonction de suppression d'un contact
function deleteContact($id) {
    $pdo = connectDB();
    $stmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
    $stmt->execute([$id]);
}
?>
