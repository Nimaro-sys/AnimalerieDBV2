<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuge RKG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_index.css">
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

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 8px; /* Ajoute un arrondi léger */
            margin-bottom: 10px; /* Espace entre les éléments */
        }

        .navbar-nav .nav-link:hover {
            background-color:rgb(9, 78, 32);
            color: white;
            border-radius: 12px; /* Arrondi plus marqué au survol */
        }

        /* Met en surbrillance l'animal sélectionné */
        .navbar-nav .nav-link.active {
            background-color:rgb(9, 78, 32);
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Refuge RKG</a>
            
            <!-- Menu burger custom -->
            <button id="burgerButton" class="btn btn-outline-light me-3">☰</button>
            <div id="burgerMenu" class="nav flex-column bg-dark p-2">
                <a class="nav-link text-white fw-bold" href="index.php">Accueil</a>
                <a class="nav-link text-white fw-bold" href="login.php">Se connecter</a>
                <a class="nav-link text-white fw-bold" href="backoffice.php">Gérer le site</a>
            </div>

            <!-- Bouton du menu Bootstrap -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php 
                $type = isset($_GET['type']) ? $_GET['type'] : null;
            ?>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link me-3" href="index.php">Animaux</a></li>
                    <li class="nav-item"><a class="nav-link me-3" href="personnel.php">Personnel</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bonjour, <?php echo htmlspecialchars($_SESSION['username']); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const burgerButton = document.getElementById('burgerButton');
        const burgerMenu = document.getElementById('burgerMenu');

        if (burgerButton && burgerMenu) {
            burgerButton.addEventListener('click', () => {
                burgerMenu.style.display = burgerMenu.style.display === 'none' ? 'block' : 'none';
            });
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="JS/script.js"></script>