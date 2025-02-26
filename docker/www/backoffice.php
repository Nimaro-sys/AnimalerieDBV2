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
    header("Location: backoffice.php");
    exit;
}
?>

<div class="container mt-5">
    <h2>Bienvenue, <?php echo $_SESSION['user']; ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Déconnexion</a>

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
                      </tr>";
            }
            ?>

    <h3>Liste du personel</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Poste</th>
                <th>login</th>
                <th>mot de passe</th>
            </tr>
        </thead>

        <?php  
            $stmt = $pdo->query("SELECT * FROM personnel");
            while ($personnel = $stmt->fetch()) {
                echo "<tr>
                        <td>{$personnel['prenom']}</td>
                        <td>{$personnel['nom']}</td>
                        <td>{$personnel['poste']}</td>
                        <td>{$personnel['login']}</td>
                        <td>{$personnel['mot_de_passe']}</td>
                      </tr>";
            }
        ?>

        <h3> Liste des cages </h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Salle</th>
                    <th>Alle</th>
                    <th>Numéro</th>
                </tr>
            </thead>
        </tbody>

        <?php
            $stmt = $pdo->query("SELECT * FROM cage");
            while ($cage = $stmt->fetch()) {
                echo "<tr>
                        <td>{$cage['salle']}</td>
                        <td>{$cage['allee']}</td>
                        <td>{$cage['numero']}</td>
                      </tr>";
            }
        ?>
        </div>
    </tbody>
</table>

<br>

<?php
require_once 'include/footer.php';
?>
