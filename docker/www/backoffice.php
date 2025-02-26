<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once 'include/config.php';

require_once 'include/header.php';
?>

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
