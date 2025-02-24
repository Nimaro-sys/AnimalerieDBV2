<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once 'include/config.php';

require_once 'include/header.php';
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
    <a href="localhost?=logout" class="btn btn-danger">Déconnexion</a>

    <h3>Liste des animaux</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Pays d'origine</th>
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
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
require_once 'include/footer.php';
?>
