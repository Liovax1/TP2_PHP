<?php
require 'db.php';
$pdo = connectDB();
$stmt = $pdo->query("SELECT * FROM contacts");
$contacts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestion des Contacts</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Liste des Contacts</h1>
    <a href="add_contact.html" class="btn btn-add">Ajouter un contact</a>

    <table>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= htmlspecialchars($contact['nom']) ?></td>
            <td><?= htmlspecialchars($contact['email']) ?></td>
            <td><?= htmlspecialchars($contact['telephone']) ?></td>
            <td>
                <a href="edit_contact.php?id=<?= $contact['id'] ?>" class="btn btn-edit">Modifier</a>
                <a href="delete_contact.php?id=<?= $contact['id'] ?>" class="btn btn-delete">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>

<!-- Tableau qui affiche la liste des contacts -->
 <!-- On utilise htmlspecialchars pour éviter les injections de script XSS. Pour les injections SQL, les requetes preparées avec PDO nous protègent déjà -->