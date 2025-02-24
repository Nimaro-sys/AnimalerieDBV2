<?php
session_start();
include_once ('include/config.php');
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

<!-- HEADER avec Menu Burger -->
<?php include_once ('include/header.php'); ?>

<!-- Contenu principal : Affichage des animaux -->
<main class="container mt-5">
    <h2 class="mb-4 text-center">Bienvenue au Refuge RKG</h2>
    <p class="text-center">Sélectionnez une catégorie dans la barre latérale pour consulter leur fiche.</p>

    <div class="row">
        <?php
    $sql = "SELECT * FROM animal";
    $stmt = $pdo->query($sql);
    $animals = $stmt->fetchAll();

        foreach ($animals as $animal) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $animal['image']; ?>" class="card-img-top" alt="Image de <?php echo $animal['nom']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['nom']; ?></h5>
                        <p class="card-text">
                            <strong>Sexe :</strong> <?php echo $animal['genre']; ?><br>
                            <strong>Numéro d'identification :</strong> <?php echo $animal['id_animal']; ?><br>
                            <strong>Pays d'origine :</strong> <?php echo $animal['pays']; ?><br>
                            <strong>Histoire :</strong> <?php echo $animal['historique']; ?>
                        </p>
                        <a href="animal_fiche.php?animal_id=<?php echo $animal['id_animal']; ?>" class="btn btn-primary">Voir la fiche</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</main>

<!-- FOOTER -->
<?php include_once './include/footer.php'; ?>
<script src="JS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// Gestion de la connexion
$employees = [
    'admin' => 'password123', // Exemple : login => mot de passe
];

// Vérification de la connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Si l'utilisateur existe et que le mot de passe est correct
    if (isset($employees[$username]) && $employees[$username] === $password) {
        $_SESSION['user'] = $username;
        $_SESSION['last_activity'] = time(); // Enregistre le timestamp de la dernière activité
        header("Location: backoffice.php"); // Redirection vers le backoffice
        exit;
    } else {
        $error = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>