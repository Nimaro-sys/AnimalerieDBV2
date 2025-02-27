<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../include/config.php';

// Vérifier si l'ID est présent
if (!isset($_GET['id'])) {
    header("Location: backoffice.php");
    exit;
}

$id = $_GET['id'];

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $poste = $_POST['poste'];
    $login = $_POST['login'];
    $mot_de_passe = $_POST['mot_de_passe'];

    if (!empty($mot_de_passe)) {
        $mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE personnel SET prenom=?, nom=?, poste=?, login=?, mot_de_passe=? WHERE id_personnel=?");
        $stmt->execute([$prenom, $nom, $poste, $login, $mot_de_passe, $id]);
    } else {
        $stmt = $pdo->prepare("UPDATE personnel SET prenom=?, nom=?, poste=?, login=? WHERE id_personnel=?");
        $stmt->execute([$prenom, $nom, $poste, $login, $id]);
    }

    header("Location: backoffice.php");
    exit;
}

// Récupérer les infos du personnel après mise à jour
$stmt = $pdo->prepare("SELECT * FROM personnel WHERE id_personnel = ?");
$stmt->execute([$id]);
$personnel = $stmt->fetch();

if (!$personnel) {
    echo "Personnel introuvable.";
    exit;
}

require_once '../include/header.php';
?>

<h3>Modifier le Personnel</h3>
<form method="POST" action="">
    <label>Prénom :</label>
    <input type="text" name="prenom" value="<?= htmlspecialchars($personnel['prenom']); ?>" required>

    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($personnel['nom']); ?>" required>

    <label>Poste :</label>
    <input type="text" name="poste" value="<?= htmlspecialchars($personnel['poste']); ?>" required>

    <label>Login :</label>
    <input type="text" name="login" value="<?= htmlspecialchars($personnel['login']); ?>" required>

    <label>Mot de passe (laisser vide pour ne pas modifier) :</label>
    <input type="password" name="mot_de_passe">

    <button type="submit" class="btn btn-success">Modifier</button>
    <a href="backoffice.php" class="btn btn-secondary">Annuler</a>
</form>

<?php require_once '../include/footer.php'; ?>
