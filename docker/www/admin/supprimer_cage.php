<?php
session_start();
require_once '../include/config.php';

if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'ID non spécifié']);
    exit;
}

$id_cage = $_GET['id'];

try {
    $stmt = $pdo->prepare("UPDATE cage SET deleted_at = NOW() WHERE id_cage = ?");
    $stmt->execute([$id_cage]);
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erreur lors de la suppression : ' . $e->getMessage()]);
}
?>