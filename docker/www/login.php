<?php
session_start();
include_once './include/config.php';

$error = "";

// Vérifier si la session a expiré avant toute autre action
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 15 * 60)) {
    session_unset();
    session_destroy();
    header("Location: ./login.php?timeout=true");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        try {
            // Vérifier les identifiants
            $stmt = $pdo->prepare("SELECT * FROM personnel WHERE login = :login");
            $stmt->execute(['login' => $username]);
            $user = $stmt->fetch();

            if ($user && $password === $user['mot_de_passe']) {
                $_SESSION['user'] = $username;
                $_SESSION['username'] = $user['prenom'];
                $_SESSION['last_activity'] = time(); // Mise à jour de l'activité
                header("Location: ./admin/backoffice.php");
                exit;
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            $error = "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    } else {
        $error = "Veuillez remplir tous les champs.";
    }
}

include_once './include/header.php';
?>

<body>

<div class="container mt-5">
    <h2>Connexion Employé</h2>
    
    <!-- Affichage du message de session expirée -->
    <?php if (isset($_GET['timeout'])): ?>
        <div class="alert alert-warning">Votre session a expiré. Veuillez vous reconnecter.</div>
    <?php endif; ?>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
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
        <button type="submit" class="btn btn-success">Se connecter</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php 
include_once './include/footer.php'; 
?>

<style>
    label {
        color: black;
    }
    input {
        color: black;
        background-color: #333;
        border: 1px solid #555;
    }
</style>
