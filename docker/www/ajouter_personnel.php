<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $numero = $_POST['numero'];
    $pays = $_POST['pays'];
    $image = $_POST['image'];

    if (!empty($nom) && !empty($genre) && !empty($numero) && !empty($pays) && !empty($image)) {
        $stmt = $pdo->prepare("INSERT INTO animal (nom, genre, numero, pays, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nom, $genre, $numero, $pays, $image]);
        header("Location: backoffice.php");
        exit;
    }
}

require_once 'include/header.php';
?>

<div class="container mt-5">
    <h2>Ajouter un Animal</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro d'identification</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="mb-3">
            <label for="pays" class="form-label">Pays d'origine</label>
            <input type="text" class="form-control" id="pays" name="pays" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php
require_once 'include/footer.php';
?>