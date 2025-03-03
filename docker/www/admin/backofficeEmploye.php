<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../include/config.php';

// Suppression d'un membre du personnel
if (isset($_GET['supprimer_personnel'])) {
    $id = $_GET['supprimer_personnel'];
    $stmt = $pdo->prepare("DELETE FROM personnel WHERE id_personnel = ?");
    $stmt->execute([$id]);
    header("Location: ../admin/backoffice.php");
    exit;
}
require_once '../include/header.php';

?>

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
                            <a href='#' class='btn btn-primary'>✏</a>
                        </td>
                        <td>
                            <a href='backoffice.php?supprimer_personnel={$personnel['id_personnel']}' class='btn btn-danger'>➖</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="ajouter_personnel.php" class="btn btn-primary">➕</a>

    <?php
require_once '../include/footer.php';
?>