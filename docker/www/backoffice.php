<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once 'include/config.php';
require_once 'include/header.php';

// Ajout d'un animal
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ajouter'])) {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $pays = $_POST['pays'];
    
    if (!empty($nom) && !empty($genre) && !empty($pays)) {
        $stmt = $pdo->prepare("INSERT INTO animal (nom, genre, pays) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $genre, $pays]);
    }
}

// Suppression d'un animal
if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    $stmt = $pdo->prepare("DELETE FROM animal WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: backoffice.php"); // Redirection pour éviter le rechargement multiple
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Bienvenue, <?php echo $_SESSION['user']; ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Déconnexion</a>

    <h3>Ajouter un animal</h3>
    <form method="POST" class="mb-4">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Sexe</label>
            <select name="genre" id="genre" class="form-control" required>
                <option value="M">Mâle</option>
                <option value="F">Femelle</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pays" class="form-label">Pays d'origine</label>
            <input type="text" name="pays" id="pays" class="form-control" required>
        </div>
        <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
    </form>

    <h3>Liste des animaux</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Pays d'origine</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM animal");
            while ($animal = $stmt->fetch()) {
                echo "<tr>
                        <td>{$animal['nom']}</td>
                        <td>{$animal['genre']}</td>
                        <td>{$animal['pays']}</td>
                        <td><a href='?supprimer={$animal['id']}' class='btn btn-danger btn-sm' onclick='return confirm("Êtes-vous sûr de vouloir supprimer cet animal ?");'>Supprimer</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php require_once 'include/footer.php'; ?>
