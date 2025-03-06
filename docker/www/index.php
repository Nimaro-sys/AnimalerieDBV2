<?php
session_start();
include_once ('include/config.php');

// Vérifier si un paramètre de filtre est passé en sécurisant l'entrée
$id_espece = filter_input(INPUT_GET, 'id_espece', FILTER_VALIDATE_INT);
?>

<!-- HEADER avec Menu Burger -->
<?php include_once ('include/header.php');
// Requête pour récupérer les animaux, avec ou sans filtre selon la sélection de l'espèce
$sql = "SELECT a.id_animal, a.nom, a.genre, a.historique, 
                COALESCE(a.image, 'https://via.placeholder.com/150') AS image, 
                a.date_naissance, GROUP_CONCAT(e.nom ORDER BY e.nom ASC) AS espece 
        FROM animal a
        LEFT JOIN animal_espece ae ON a.id_animal = ae.id_animal
        LEFT JOIN espece e ON ae.id_espece = e.id_espece";

if ($id_espece) {
    $sql .= " WHERE e.id_espece = :id_espece";
}

$sql .= " GROUP BY a.id_animal LIMIT 50"; // Groupe par id_animal pour éviter les doublons

$requete_animaux = $pdo->prepare($sql);

// Si un filtre est appliqué, lier le paramètre pour la requête
if ($id_espece) {
    $requete_animaux->bindParam(':id_espece', $id_espece, PDO::PARAM_INT);
}

$requete_animaux->execute();
$animaux = $requete_animaux->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les espèces disponibles
$requete_especes = $pdo->query("SELECT id_espece, nom FROM espece");
$especes = $requete_especes->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Contenu principal : Affichage des animaux -->
<main class="container mt-5">
    <h2 class="mb-4 text-center">Bienvenue au Refuge RKGT</h2>

    <form method="GET" action="" class="d-flex gap-2 align-items-center">
                <select class="form-select" name="id_espece" aria-label="Filtrer par espèce">
                    <option selected value="">Choisissez une espèce</option>
                    <?php foreach ($especes as $espece) : ?>
                        <option value="<?= $espece['id_espece'] ?>" <?= ($id_espece == $espece['id_espece']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($espece['nom']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="btn btn-success" aria-label="Appliquer le filtre">Filtrer</button>
            </form>

            <div class="row">
    <?php foreach ($animaux as $animal) : ?>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
            <img src="<?= $animal['image'] ? './images/animal/' . htmlspecialchars($animal['image']) : 'https://via.placeholder.com/150' ?>" 
            class="card-img-top" 
            alt="Image de <?= htmlspecialchars($animal['nom']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($animal['nom']) ?></h5>
                    <p class="card-text">
                        <strong>Espèce :</strong> <?= htmlspecialchars($animal['espece']) ?><br>
                        <strong>Sexe :</strong> <?= htmlspecialchars($animal['genre']) ?><br>
                        <strong>Date de naissance :</strong> <?= htmlspecialchars($animal['date_naissance']) ?><br>
                    </p>
                    <a href="animal_fiche.php?animal_id=<?= $animal['id_animal'] ?>" class="btn btn-secondary">Voir la fiche</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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