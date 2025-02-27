<?php
session_start();

// Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

// Inclure le fichier de configuration de la base de données
require_once '../include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cage = $_POST['id_cage'];
    $salle = $_POST['salle'];
    $allee = $_POST['allee'];
    $numero = $_POST['numero'];

    if (!empty($salle) && !empty($allee) && !empty($numero)) {
        try {
            $stmt = $pdo->prepare("UPDATE cage SET salle = ?, allee = ?, numero = ? WHERE id_cage = ?");
            $stmt->execute([$salle, $allee, $numero, $id_cage]);
            header("Location: backoffice.php");
            exit;
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>