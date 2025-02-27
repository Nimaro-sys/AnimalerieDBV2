<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $salle = $_POST['salle'];
    $allee = $_POST['allee'];
    $numero = $_POST['numero'];

    if (!empty($salle) && !empty($allee) && !empty($numero)) {
        $stmt = $pdo->prepare("INSERT INTO cage (salle, allee, numero) VALUES (?, ?, ?)");
        $stmt->execute([$salle, $allee, $numero]);
        header("Location: backoffice.php");
        exit;
    }
}

require_once '../include/header.php';
?>

<div class="container mt-5">
    <h2>Ajouter une Cage</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="salle" class="form-label">Salle</label>
            <input type="text" class="form-control" id="salle" name="salle" required>
        </div>
        <div class="mb-3">
            <label for="allee" class="form-label">Allée</label>
            <input type="text" class="form-control" id="allee" name="allee" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php
require_once '../include/footer.php';
?>