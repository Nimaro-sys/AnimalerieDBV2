<?php
session_start();

// Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

// Inclure le fichier de configuration de la base de données
require_once '../include/config.php';

// Récupérer toutes les cages depuis la base de données
try {
    $stmt = $pdo->query("SELECT * FROM cage");
    $cages = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de base de données : " . $e->getMessage();
    exit;
}

// Inclure l'en-tête de la page
require_once '../include/header.php';
?>

<div class="container mt-5">
    <h2>Sélectionner une Cage à Modifier</h2>
    <form action="modifier_cage.php" method="get">
        <div class="mb-3">
            <label for="id_cage" class="form-label">Sélectionnez une cage :</label>
            <select class="form-control" id="id_cage" name="id" required>
                <option value="">Choisissez une cage</option>
                <?php foreach ($cages as $cage) : ?>
                    <option value="<?= htmlspecialchars($cage['id_cage']) ?>">
                        Cage <?= htmlspecialchars($cage['id_cage']) ?> - Salle <?= htmlspecialchars($cage['salle']) ?>, Allée <?= htmlspecialchars($cage['allee']) ?>, Numéro <?= htmlspecialchars($cage['numero']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="backoffice.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?php
// Inclure le pied de page
require_once '../include/footer.php';
?>