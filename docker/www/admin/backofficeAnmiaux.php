<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../include/config.php';

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


if (isset($_GET['supprimer_animal'])) {
    $id = $_GET['supprimer_animal'];
    $stmt = $pdo->prepare("DELETE FROM animal WHERE id_animal = ?");
    $stmt->execute([$id]);
    header("Location: ../backofficeAnmiaux.php");
    exit;
}

require_once '../include/header.php';

?>
<!-- Boutons page backoffice-->

<div class="container mt-5">
    <a href="backofficeAnmiaux.php" class="btn btn-primary">animaux</a>
    <a href="backofficeCage.php" class="btn btn-primary">Cages</a>
    <a href="backofficeEmploye.php" class="btn btn-primary">Personnel</a>
</div>

<div class="container mt-5">
    <h2>Bienvenue, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="login.php" class="btn btn-danger">Déconnexion</a>

    <h3>Liste des animaux</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Identication</th>
                <th>Pays d'origine</th>
                <th>Photo</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM animal");
            while ($animal = $stmt->fetch()) {
                echo "<tr>
                        <td>{$animal['id_animal']}</td>
                        <td>{$animal['nom']}</td>
                        <td>{$animal['genre']}</td>
                        <td>{$animal['numero']}</td>
                        <td>{$animal['pays']}</td>
                        <td>{$animal['image']}</td>
                        <td>
                            <a href='#' class='btn btn-primary'>✏</a>
                        </td>
                        <td>
                            <a href='backoffice.php?supprimer_animal={$animal['id_animal']}' class='btn btn-danger'>➖</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="ajouter_animal.php" class="btn btn-primary">➕</a>

    <?php
require_once '../include/footer.php';
?>