<?php
session_start();
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuge RKG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style_index.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<main class="container mt-5">
    <h2 class="mb-4 text-center">Bienvenue au Refuge RKG</h2>
    <p class="text-center">Découvrez nos animaux en attente d’adoption.</p>

    <div class="row">
        <?php
        $stmt = $pdo->query("SELECT * FROM animaux");
        while ($animal = $stmt->fetch()) {
        ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $animal['image']; ?>" class="card-img-top" alt="Image de <?php echo $animal['nom']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['nom']; ?></h5>
                        <p class="card-text">
                            <strong>Sexe :</strong> <?php echo $animal['sexe']; ?><br>
                            <strong>Âge :</strong> <?php echo $animal['age']; ?> ans<br>
                            <strong>Pays :</strong> <?php echo $animal['pays']; ?>
                        </p>
                        <a href="animal_fiche.php?animal_id=<?php echo $animal['id']; ?>" class="btn btn-primary">Voir la fiche</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
