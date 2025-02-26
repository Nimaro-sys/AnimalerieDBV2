<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once 'include/config.php';

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
if (isset($_GET['supprimer_animal'])) {
    $id = $_GET['supprimer_animal'];
    $stmt = $pdo->prepare("DELETE FROM animal WHERE id_animal = ?");
    $stmt->execute([$id]);
    header("Location: backoffice.php");
    exit;
}

// Suppression d'un membre du personnel
if (isset($_GET['supprimer_personnel'])) {
    $id = $_GET['supprimer_personnel'];
    $stmt = $pdo->prepare("DELETE FROM personnel WHERE id_personnel = ?");
    $stmt->execute([$id]);
    header("Location: backoffice.php");
    exit;
}

// Suppression d'une cage
if (isset($_GET['supprimer_cage'])) {
    $id = $_GET['supprimer_cage'];
    $stmt = $pdo->prepare("DELETE FROM cage WHERE id_cage = ?");
    $stmt->execute([$id]);
    header("Location: backoffice.php");
    exit;
}


require_once 'include/header.php';

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
                            <a href='#' class='btn btn-primary'>Modifier</a>
                        </td>
                        <td>
                            <a href='backoffice.php?supprimer_animal={$animal['id_animal']}' class='btn btn-danger'>Supprimer</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="ajouter_animal.php" class="btn btn-primary">Ajouter un Animal</a>

    <h3>Liste du personnel</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Poste</th>
                <th>Login</th>
                <th>Mot de passe</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            $stmt = $pdo->query("SELECT * FROM personnel");
            while ($personnel = $stmt->fetch()) {
                echo "<tr>
                        <td>{$personnel['prenom']}</td>
                        <td>{$personnel['nom']}</td>
                        <td>{$personnel['poste']}</td>
                        <td>{$personnel['login']}</td>
                        <td>{$personnel['mot_de_passe']}</td>
                        <td>
                            <a href='#' class='btn btn-primary'>Modifier</a>
                        </td>
                        <td>
                            <a href='backoffice.php?supprimer_personnel={$personnel['id_personnel']}' class='btn btn-danger'>Supprimer</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="ajouter_personnel.php" class="btn btn-primary">Ajouter un Membre du Personnel</a>

    <h3>Liste des cages</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Salle</th>
                <th>Allée</th>
                <th>Numéro</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM cage");
            while ($cage = $stmt->fetch()) {
                echo "<tr>
                        <td>{$cage['salle']}</td>
                        <td>{$cage['allee']}</td>
                        <td>{$cage['numero']}</td>
                        <td>
                            <a href='#' class='btn btn-primary'>Modifier</a>
                        </td>
                        <td>
                            <a href='backoffice.php?supprimer_cage={$cage['id_cage']}' class='btn btn-danger'>Supprimer</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="ajouter_cage.php" class="btn btn-primary">Ajouter une Cage</a>
</div>

<?php
require_once 'include/footer.php';
?>