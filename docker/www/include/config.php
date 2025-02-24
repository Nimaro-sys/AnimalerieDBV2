<?php

$host = 'mysql_container';
$dbname = 'db_refuge_animaux';
$user = 'greta';
$password = 'greta_refuge';

try {
    // Connexion à la base de données avec PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}

catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// test de la connexion à la base de données
//$sql = "SELECT * FROM animal";
//$stmt = $pdo->query($sql);
//$animals = $stmt->fetchAll();
//echo "<pre>";
//print_r($animals);
//echo "</pre>";
?>