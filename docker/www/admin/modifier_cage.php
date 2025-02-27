<?php
session_start();

// Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

// Inclure le fichier de configuration de la base de données
require_once '../include/config.php';

// Vérifier si l'ID de la cage est présent dans l'URL
if (!isset($_GET['id'])) {
    header("Location: selectionner_cage.php");
    exit;
}

// Récupérer l'ID de la cage depuis l'URL
$id_cage = $_GET['id'];

// Récupérer les informations de la cage depuis la base de données
try {
    $stmt = $pdo->prepare("SELECT * FROM cage WHERE id_cage = ?");
    $stmt->execute([$id_cage]);
    $cage = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de base de données : " . $e->getMessage();
    exit;
}

// Si la cage n'existe pas, rediriger vers la page de sélection
if (!$cage) {
    header("Location: selectionner_cage.php");
    exit;
}

// Inclure l'en-tête de la page
require_once '../include/header.php';
?>

<div class="container mt-5">
    <h2>Modifier la Cage</h2>
    <form action="traitement_modification.php" method="post">
        <input type="hidden" name="id_cage" value="<?= htmlspecialchars($cage['id_cage']) ?>">
        <div class="mb-3">
            <label for="salle" class="form-label">Salle :</label>
            <input type="text" class="form-control" id="salle" name="salle" value="<?= htmlspecialchars($cage['salle']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="allee" class="form-label">Allée :</label>
            <input type="text" class="form-control" id="allee" name="allee" value="<?= htmlspecialchars($cage['allee']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro :</label>
            <input type="text" class="form-control" id="numero" name="numero" value="<?= htmlspecialchars($cage['numero']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        <a href="selectionner_cage.php" class="btn btn-secondary">Retour</a>
    </form>
</div>

<?php
// Inclure le pied de page
require_once '../include/footer.php';
?>