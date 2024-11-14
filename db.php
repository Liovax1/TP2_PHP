<link rel="stylesheet" href="style.css">
<?php
// Fonction qui nous permet de nous connecter à la base de données
function connectDB() {
    $host = '127.0.0.1';
    $dbname = 'contacts_db';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}
?>
