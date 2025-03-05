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

require_once '../include/headerAdmin.php';
?>
<!-- Boutons page backoffice-->

<div class="container mt-5">
    <a href="backofficeAnmiaux.php" class="btn btn-primary">animaux</a>
    <a href="backofficeCage.php" class="btn btn-primary">Cages</a>
    <a href="backofficeEmploye.php" class="btn btn-primary">Personnel</a>
</div>

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
                <th>Animaux</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            $requete_personnels = $pdo->query("SELECT * FROM personnel");
            $personnels = $requete_personnels->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($personnels as &$personnel) {
                if ($personnel['poste'] === 'soigneur') {
                    $id_personnel = $personnel['id_personnel'];
                    $requete_animaux = $pdo->prepare("SELECT a.nom, a.genre, a.numero, a.pays, a.date_naissance, a.date_arrivee, a.date_deces, a.historique, a.image, e.nom as espece FROM animal a 
                        INNER JOIN s_occuper s ON a.id_animal = s.id_animal 
                        INNER JOIN animal_espece ae ON a.id_animal = ae.id_animal 
                        INNER JOIN espece e ON ae.id_espece = e.id_espece 
                        WHERE s.id_personnel = :id_personnel");
                    $requete_animaux->bindValue(':id_personnel', $id_personnel, PDO::PARAM_INT);
                    $requete_animaux->execute();
                    $personnel['animaux'] = $requete_animaux->fetchAll(PDO::FETCH_ASSOC);
                }
            }
            $stmt = $pdo->query("SELECT * FROM personnel");
            foreach ($personnels as $personnel) {
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
                        <td>";
                
                // Vérifie si le personnel est un soigneur et a des animaux
                if ($personnel['poste'] === 'soigneur' && !empty($personnel['animaux'])) {
                    echo "<button class='btn btn-info' data-bs-toggle='modal' data-bs-target='#modalAnimaux{$personnel['id_personnel']}'>👀 Voir</button>";
            
                    // Modal Bootstrap
                    echo "<div class='modal fade' id='modalAnimaux{$personnel['id_personnel']}' tabindex='-1' aria-labelledby='modalLabel{$personnel['id_personnel']}' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='modalLabel{$personnel['id_personnel']}'>Animaux de {$personnel['prenom']} {$personnel['nom']}</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>";
                                    
                    // Liste des animaux du soigneur
                    foreach ($personnel['animaux'] as $animal) {
                        echo "<p><strong>Nom :</strong> {$animal['nom']} - <strong>Espèce :</strong> {$animal['espece']}</p>";
                    }
            
                    echo "        </div>
                                </div>
                            </div>
                        </div>";
                } else {
                    echo "Aucun animal";
                }
            
                echo "</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="ajouter_personnel.php" class="btn btn-primary">➕</a>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php
require_once '../include/footer.php';
?>