<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../include/config.php';


if (!isset($_GET['id'])) {
    header("Location: backoffice.php");
    exit;
}

$id = $_GET['id'];

// Récupérer les données de l'animal
$stmt = $pdo->prepare("SELECT * FROM animal WHERE id_animal = ?");
$stmt->execute([$id]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$animal) {
    header("Location: backoffice.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $numero = $_POST['numero'];
    $pays = $_POST['pays'];
    $date_naissance = $_POST['date_naissance'];
    $date_arrivee = $_POST['date_arrivee'];
    $historique = $_POST['Historique'];
    $image = $_POST['image'];

    if (!empty($nom) && !empty($genre) && !empty($numero) && !empty($pays) && !empty($date_naissance) && !empty($date_arrivee) && !empty($historique) && !empty($image)) {
        $stmt = $pdo->prepare("UPDATE animal SET nom = ?, genre = ?, numero = ?, pays = ?, date_naissance = ?, date_arrivee = ?, historique = ?, image = ? WHERE id_animal = ?");
        $stmt->execute([$nom, $genre, $numero, $pays, $date_naissance, $date_arrivee, $historique, $image, $id]);
        header("Location: backoffice.php");
        exit;
    }
}

require_once '../include/headerAdmin.php';
?>

<div class="container mt-5">
    <h2>Modifier un Animal</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($animal['nom']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-control" id="genre" name="genre" required>
                <option value="M" <?= $animal['genre'] == 'M' ? 'selected' : '' ?>>Mâle</option>
                <option value="F" <?= $animal['genre'] == 'F' ? 'selected' : '' ?>>Femelle</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro d'identification</label>
            <input type="text" class="form-control" id="numero" name="numero" value="<?= htmlspecialchars($animal['numero']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="pays" class="form-label">Pays d'origine</label>
            <input type="text" class="form-control" id="pays" name="pays" value="<?= htmlspecialchars($animal['pays']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="<?= htmlspecialchars($animal['date_naissance']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="date_arrivee" class="form-label">Date d'arrivée</label>
            <input type="date" class="form-control" id="date_arrivee" name="date_arrivee" value="<?= htmlspecialchars($animal['date_arrivee']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Historique" class="form-label">Historique</label>
            <input type="text" class="form-control" id="Historique" name="Historique" value="<?= htmlspecialchars($animal['historique']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="<?= htmlspecialchars($animal['image']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>

<?php
require_once '../include/footer.php';
?>
