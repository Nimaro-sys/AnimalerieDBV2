<?php

require_once ('include/config.php');

$sql = "SELECT * FROM animal WHERE id_animal = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_GET['animal_id']]);
$animal = $stmt->fetch();

require_once ('include/header.php');
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm" style="width: 100%;">
                <!-- Image dynamique de l'animal -->
                <img src="<?php echo './images/animal/' . $animal['image']; ?>" class="card-img-top" alt="Image de <?php echo $animal['nom']; ?>" style="object-fit: cover; height: 300px;">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $animal['nom']; ?></h5>
                    <p class="card-text">
                        <strong>Sexe :</strong> <?php echo $animal['genre']; ?><br>
                        <strong>Numéro d'identification :</strong> <?php echo $animal['numero']; ?><br>
                        <strong> date arrivée:</strong> <?php echo $animal['date_arrivee']; ?><br>
                        <strong>date de décès:</strong> <?php 
                        // si la date de décès est vide mettre N/A
                        if ($animal['date_deces'] == NULL) {
                            echo "N/A";
                        } else {
                            echo $animal['date_deces'];
                        } ?><br>
                        <strong>Pays d'origine :</strong> <?php echo $animal['pays']; ?><br>
                        <strong>Histoire :</strong> <?php echo $animal['historique']; ?>
                    </p>
                    <button type="button" class="btn btn-success w-100">
                        adopter
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once ('include/footer.php'); ?>