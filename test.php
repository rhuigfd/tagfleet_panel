<?php
$host = '172.21.3.41';  // L'adresse du serveur MySQL distant (ex: '127.0.0.1' ou 'db.monsite.com')
$dbname = 'serveurBDD';  // Le nom de la base de données
$username = 'administrateur';  // Le nom d'utilisateur de la base de données
$password = 'TagFleet@Admin#11';  // Le mot de passe de l'utilisateur

try {
    // Créer une instance de PDO pour se connecter à la base de données
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $username, $password);
    
    // Définir le mode d'erreur de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Si la connexion réussit, afficher un message
    echo "Connexion réussie à la base de données $dbname !";
} catch (PDOException $e) {
    // Si la connexion échoue, afficher l'erreur
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
