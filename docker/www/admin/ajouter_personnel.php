<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $poste = $_POST['poste'];
    $login = $_POST['login'];
    $mot_de_passe = $_POST['mot_de_passe'];

    if (!empty($prenom) && !empty($nom) && !empty($poste) && !empty($login) && !empty($mot_de_passe)) {
        $stmt = $pdo->prepare("INSERT INTO personnel (prenom, nom, poste, login, mot_de_passe) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$prenom, $nom, $poste, $login, $mot_de_passe]);
        header("Location: backoffice.php");
        exit;
    }
}

require_once '../include/header.php';
?>

<div class="container mt-5">
    <h2>Ajouter un Membre du Personnel</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="poste" class="form-label">Poste</label>
            <select class="form-control" id="poste" name="poste" required>
                <option value="cadre">Cadre</option>
                <option value="Soigneur">Soigneur</option>
                <option value="administratif">Admin</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="mot_de_passe" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php
require_once 'include/footer.php';
?>