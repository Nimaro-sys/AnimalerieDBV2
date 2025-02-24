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
        // Exemple d'affichage des animaux avec des données dynamiques
        $animals = [
            $animaux = 
                [
                    'nom' => 'Thor',
                    'sexe' => 'M',
                    'age' => 4,
                    'identification' => 'CHI001',
                    'pays' => 'Islande',
                    'histoire' => 'Thor adore jouer à "attraper le bâton", mais il ramène toujours des pierres à la place. On l’appelle le "Dieu du Mauvais Lancer".',
                    'image' => 'images/animal/thor.jpg',
                ],
                [
                    'nom' => 'Freya',
                    'sexe' => 'F',
                    'age' => 5,
                    'identification' => 'CHI002',
                    'pays' => 'Norvège',
                    'histoire' => 'Freya a sauvé un chaton coincé dans un arbre. Depuis, elle se prend pour une super-héroïne.',
                    'image' => 'images/animal/freya.jpg',
                ],
                [
                    'nom' => 'Odin',
                    'sexe' => 'M',
                    'age' => 6,
                    'identification' => 'CHI003',
                    'pays' => 'Suède',
                    'histoire' => 'Odin a un œil qui brille comme une étoile. Il adore raconter des histoires de Vikings à ses amis.',
                    'image' => 'images/animal/odin.jpg',
                ],
                [
                    'nom' => 'Loki',
                    'sexe' => 'M',
                    'age' => 3,
                    'identification' => 'CHI004',
                    'pays' => 'Danemark',
                    'histoire' => 'Loki est un farceur. Il cache les chaussures des soigneurs et rit quand ils les cherchent.',
                    'image' => 'images/animal/loki.jpg',
                ],
                [
                    'nom' => 'Sif',
                    'sexe' => 'F',
                    'age' => 7,
                    'identification' => 'CHI005',
                    'pays' => 'Finlande',
                    'histoire' => 'Sif a une fourrure si brillante qu’on dirait de l’or. Elle adore se faire brosser.',
                    'image' => 'images/animal/sif.jpg',
                ],
                [
                    'nom' => 'Eclipse',
                    'sexe' => 'M',
                    'age' => 9,
                    'identification' => 'CHE001',
                    'pays' => 'France',
                    'histoire' => 'Eclipse est noir comme la nuit. Il adore galoper sous la pleine lune.',
                    'image' => 'images/animal/eclipse.jpg',
                ],
                [
                    'nom' => 'Luna',
                    'sexe' => 'F',
                    'age' => 8,
                    'identification' => 'CHE002',
                    'pays' => 'Belgique',
                    'histoire' => 'Luna a une crinière argentée. Elle rêve de devenir une licorne.',
                    'image' => 'images/animal/luna_cheval.jpg',
                ],
                [
                    'nom' => 'Storm',
                    'sexe' => 'M',
                    'age' => 10,
                    'identification' => 'CHE003',
                    'pays' => 'Canada',
                    'histoire' => 'Storm est un cheval puissant. Il adore les défis et les courses sous la pluie.',
                    'image' => 'images/animal/storm.jpg',
                ],
                [
                    'nom' => 'Melman',
                    'sexe' => 'M',
                    'age' => 12,
                    'identification' => 'GIR001',
                    'pays' => 'Kenya',
                    'histoire' => 'Melman est un peu hypocondriaque. Il porte toujours une écharpe, même en été.',
                    'image' => 'images/animal/melman.jpg',
                ],
                [
                    'nom' => 'Dumbo',
                    'sexe' => 'M',
                    'age' => 14,
                    'identification' => 'ELE001',
                    'pays' => 'Thaïlande',
                    'histoire' => 'Dumbo adore voler avec ses grandes oreilles. Enfin, il essaie…',
                    'image' => 'images/animal/dumbo.jpg',
                ],
                [
                    'nom' => 'Ellie',
                    'sexe' => 'F',
                    'age' => 15,
                    'identification' => 'ELE002',
                    'pays' => 'Inde',
                    'histoire' => 'Ellie était la reine du refuge. Elle adorait danser sous la pluie.',
                    'image' => 'images/animal/ellie.jpg',
                ],
                [
                    'nom' => 'Slytherin',
                    'sexe' => 'M',
                    'age' => 6,
                    'identification' => 'SERP001',
                    'pays' => 'Australie',
                    'histoire' => 'Slytherin est un serpent très malin. Il adore jouer à cache-cache.',
                    'image' => 'images/animal/slytherin.jpg',
                ],
                [
                    'nom' => 'Vipera',
                    'sexe' => 'F',
                    'age' => 5,
                    'identification' => 'SERP002',
                    'pays' => 'Brésil',
                    'histoire' => 'Vipera est rapide comme l’éclair. Elle adore surprendre ses soigneurs.',
                    'image' => 'images/animal/vipera.jpg',
                ],
                [
                    'nom' => 'Cobra',
                    'sexe' => 'M',
                    'age' => 4,
                    'identification' => 'SERP003',
                    'pays' => 'Inde',
                    'histoire' => 'Cobra a un regard hypnotique. Il adore faire des blagues en se dressant brusquement.',
                    'image' => 'images/animal/cobra.jpg',
                ],
                [
                    'nom' => 'Misty',
                    'sexe' => 'F',
                    'age' => 4,
                    'identification' => 'CHAT001',
                    'pays' => 'France',
                    'histoire' => 'Misty est une chatte calme et affectueuse. Elle adore se prélasser au soleil.',
                    'image' => 'images/animal/misty.jpg',
                ],
                [
                    'nom' => 'Shadow',
                    'sexe' => 'M',
                    'age' => 5,
                    'identification' => 'CHAT002',
                    'pays' => 'Espagne',
                    'histoire' => 'Shadow est un chat discret. Il adore se cacher dans les cartons.',
                    'image' => 'images/animal/shadow_chat.jpg',
                ],
                [
                    'nom' => 'Whiskers',
                    'sexe' => 'M',
                    'age' => 5,
                    'identification' => 'CHAT003',
                    'pays' => 'Italie',
                    'histoire' => 'Whiskers était un chat espiègle. Il adorait jouer avec les lacets des soigneurs.',
                    'image' => 'images/animal/whiskers.jpg',
                ],
                [
                    'nom' => 'Baudet',
                    'sexe' => 'M',
                    'age' => 9,
                    'identification' => 'ANE001',
                    'pays' => 'France',
                    'histoire' => 'Baudet est un âne têtu mais très affectueux. Il adore les carottes.',
                    'image' => 'images/animal/baudet.jpg',
                ],
                [
                    'nom' => 'Molly',
                    'sexe' => 'F',
                    'age' => 3,
                    'identification' => 'MUL001',
                    'pays' => 'France',
                    'histoire' => 'Molly est un mulet robuste. Elle adore aider les soigneurs et porte toujours un sourire.',
                    'image' => 'images/animal/molly.jpg',
                ]
            ]
            
            // Ajoute plus d'animaux ici
        ;

        foreach ($animals as $animal) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $animal['image']; ?>" class="card-img-top" alt="Image de <?php echo $animal['nom']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $animal['nom']; ?></h5>
                        <p class="card-text">
                            <strong>Sexe :</strong> <?php echo $animal['sexe']; ?><br>
                            <strong>Âge :</strong> <?php echo $animal['age']; ?> ans<br>
                            <strong>Numéro d'identification :</strong> <?php echo $animal['identification']; ?><br>
                            <strong>Pays d'origine :</strong> <?php echo $animal['pays']; ?><br>
                            <strong>Histoire :</strong> <?php echo $animal['histoire']; ?>
                        </p>
                        <a href="animal_fiche.php?animal_id=<?php echo $animal['identification']; ?>" class="btn btn-primary">Voir la fiche</a>
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