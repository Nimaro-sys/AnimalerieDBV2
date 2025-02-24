<?php
$animal = [
    'nom' => 'Thor',
    'sexe' => 'M',
    'age' => 3,
    'identification' => 'CHI001',
    'pays' => 'Islande',
    'histoire' => 'Thor adore jouer à attraper le bâton, mais il ramène toujours des pierres à la place. On l\'appelle le Dieu du Mauvais Lancer.',
    'image' => 'images/animal/Chien1.jpg',
];
?>

<div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <!-- Image dynamique de l'animal -->
                <img src="<?php echo $animal['image']; ?>" class="card-img-top" alt="Image de <?php echo $animal['nom']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $animal['nom']; ?></h5>
                    <p class="card-text">
                        <strong>Sexe :</strong> <?php echo $animal['genre']; ?><br>
                        <strong>Numéro d'identification :</strong> <?php echo $animal['id_animal']; ?><br>
                        <strong>Pays d'origine :</strong> <?php echo $animal['pays']; ?><br>
                        <strong>Histoire :</strong> <?php echo $animal['historique']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
