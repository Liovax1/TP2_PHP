<link rel="stylesheet" href="style.css">
<?php

// On se connecte à la base, récupère les infos d'un contact grace a son ID et stocke les infos
require 'db.php';
$pdo = connectDB();
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = ?");
$stmt->execute([$id]);
$contact = $stmt->fetch();
?>

<!-- Formulaire d'edition d'un contact -->
<form action="update_contact.php" method="POST">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
    <input type="text" name="nom" value="<?= $contact['nom'] ?>" required>
    <input type="email" name="email" value="<?= $contact['email'] ?>" required>
    <input type="text" name="telephone" value="<?= $contact['telephone'] ?>" required>
    <button type="submit">Mettre à jour</button>
</form>
