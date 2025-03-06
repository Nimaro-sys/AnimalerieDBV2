<?php
session_start();
require_once '../include/config.php';

if (!isset($_GET['id'])) {
    header("Location: backofficeCage.php?error=ID_non_specifie");
    exit;
}

$id_cage = (int) $_GET['id']; // Convertir en entier

// Vérifier que l'ID est valide
if ($id_cage <= 0) {
    header("Location: backofficeCage.php?error=ID_invalide");
    exit;
}

try {
    // Libérer les animaux avant de supprimer la cage
    $stmt = $pdo->prepare("UPDATE animal SET id_cage=NULL WHERE id_cage=?");
    $stmt->execute([$id_cage]);

    // Supprimer la cage
    $stmt = $pdo->prepare("DELETE FROM cage WHERE id_cage=?");
    $stmt->execute([$id_cage]);

    // Redirection après suppression réussie
    header("Location: backofficeCage.php?success=cage_supprimee");
    exit;

} catch (PDOException $e) {
    // Redirection en cas d'erreur avec un message
    header("Location: backofficeCage.php?error=" . urlencode($e->getMessage()));
    exit;
}
?>
