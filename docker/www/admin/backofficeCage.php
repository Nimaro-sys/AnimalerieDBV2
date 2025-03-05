<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../login.php");
    exit;
}

require_once '../include/config.php';



// Suppression d'une cage
if (isset($_GET['supprimer_cage'])) {
    $id = $_GET['supprimer_cage'];
    $stmt = $pdo->prepare("DELETE FROM cage WHERE id_cage = ?");
    $stmt->execute([$id]);
    header("Location: backoffice.php");
    exit;
}


require_once '../include/headerAdmin.php';
?>
<!-- Boutons page backoffice-->

<div class="container mt-5">
    <a href="backofficeAnmiaux.php" class="btn btn-primary">animaux</a>
    <a href="backofficeCage.php" class="btn btn-primary">Cages</a>
    <a href="backofficeEmploye.php" class="btn btn-primary">Personnel</a>
</div>

<div class="container mt-5">
    <h2>Bienvenue, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="ajouter_cage.php" class="btn btn-primary">Ajouter une Cage</a>
    <a href="login.php" class="btn btn-danger">Déconnexion</a>


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
                echo "<tr id='cage-{$cage['id_cage']}'>
                        <td>{$cage['salle']}</td>
                        <td>{$cage['allee']}</td>
                        <td>{$cage['numero']}</td>
                        <td>
                            <a href='modifier_cage.php?id={$cage['id_cage']}' class='btn btn-primary'>✏</a>
                        </td>
                        <td>
                            <a href='supprimer_cage.php?id={$cage['id_cage']}' class='btn btn-danger'>➖</a>
                        </td>
                    </tr>";
            }
?>
</tbody>
    </table>
    
</div>

<?php
require_once '../include/footer.php';
?>