<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuge RKG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_guichard.css">
    <link rel="stylesheet" href="css/style_romain.css">
    <link rel="stylesheet" href="css/style_kenan.css">
    <style>
        /* Style du menu burger custom */
        #burgerButton {
            font-size: 0.8rem;
            padding: 2px 6px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #burgerMenu {
            display: none;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Refuge RKG</a>
            
            <!-- Menu burger custom -->
            <button id="burgerButton" class="btn btn-outline-light">☰</button>
            <div id="burgerMenu" class="nav flex-column bg-dark p-2">
                <a class="nav-link text-white fw-bold" href="#">À propos de nous</a>
                <a class="nav-link text-white fw-bold" href="#">Contact</a>
                <a class="nav-link text-white fw-bold" href="#">Services</a>
            </div>

            <!-- Bouton du menu Bootstrap -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion Employé</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="backoffice.php">Backoffice</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
