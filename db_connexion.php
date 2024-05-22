<?php
// Informations de connexion
$host = 'localhost';
$db = 'nom_de_votre_base_de_donnees';
$user = 'nom_utilisateur';
$pass = 'mot_de_passe';
$charset = 'utf8mb4';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";



try {
    // Création de l'instance PDO
    $pdo = new PDO($dsn, $user, $pass);
    // Message de succès (optionnel, souvent désactivé en production)
    // echo "Connexion réussie à la base de données !";
} catch (\PDOException $e) {
    // En cas d'erreur, afficher le message et le code d'erreur
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
