
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Employé</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Connexion Employé</h2>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
session_start();

// Vérifier si l'utilisateur est connecté et si la session n'est pas expirée
if (!isset($_SESSION['user']) || (time() - $_SESSION['last_activity']) > 900) {
    // Si l'utilisateur n'est pas connecté ou la session a expiré
    header("Location: login.php");
    exit;
}

$_SESSION['last_activity'] = time();
$animals = [
    ['nom' => 'Thor', 'sexe' => 'M', 'age' => 3, 'identification' => 'CHI001', 'pays' => 'Islande'],
    ['nom' => 'Shadow', 'sexe' => 'M', 'age' => 5, 'identification' => 'CHE001', 'pays' => 'Espagne'],
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Bienvenue, <?php echo $_SESSION['user']; ?>!</h2>
    <h3>Liste des animaux</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Âge</th>
                <th>Pays d'origine</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?php echo $animal['nom']; ?></td>
                    <td><?php echo $animal['sexe']; ?></td>
                    <td><?php echo $animal['age']; ?> ans</td>
                    <td><?php echo $animal['pays']; ?></td>
                    <td><a href="animal_fiche.php?animal_id=<?php echo $animal['identification']; ?>" class="btn btn-info">Voir</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>