<?php
session_start();
require_once 'include/config.php';

if (!isset($_GET['animal_id'])) {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM animal WHERE id_animal = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['animal_id']]);
$animal = $stmt->fetch();

require_once 'include/header.php';
?>

<div class="container mt-5">
    <h2>Formulaire d'adoption pour <?php echo htmlspecialchars($animal['nom']); ?></h2>
    <form method="POST" action="index.php">
        <div class="mb-3">
            <label for="adopterName" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="adopterName" name="adopterName" required>
        </div>
        <div class="mb-3">
            <label for="adopterEmail" class="form-label">Votre email</label>
            <input type="email" class="form-control" id="adopterEmail" name="adopterEmail" required>
        </div>
        <div class="mb-3">
            <label for="adopterPhone" class="form-label">Votre téléphone</label>
            <input type="text" class="form-control" id="adopterPhone" name="adopterPhone" required>
        </div>
        <input type="hidden" name="animal_id" value="<?php echo $animal['id_animal']; ?>">
        <button type="submit" class="btn btn-primary">adopter <?php echo $animal['nom'] ?></button>
    </form>
</div>

<?php
require_once 'include/footer.php';
?>