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
    <script src="JS/script.js"></script>
</head>
<body>
    <header>
    <nav class="col-md-3 col-lg-2 bg-dark text-white sidebar p-3">
        <!-- Bouton Connexion -->
        <button id="connexionButton" class="btn btn-outline-light w-100 mb-3">Connexion</button>
        
        <!-- Formulaire de Connexion caché -->
        <div id="connexionForm">
          <form>
            <div class="mb-3">
              <label for="email" class="form-label text-white">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" placeholder="Entrez votre e-mail">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-white">Mot de passe</label>
              <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
          </form>
        </div>
        
        <h1 class="header-title text-white fs-2 d-flex align-items-center justify-content-between">
        Animaux
        <span class="toggle-icon" data-target="#animauxList">▼</span>
    </h1>
    <ul id="animauxList" class="nav flex-column mt-3">
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="chiens.html">Chiens</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="chevaux.html">Chevaux</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="elephants.html">Éléphants</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="loups.html">Loups</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="chats.html">Chats</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="serpents.html">Serpents</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="Âne.html">Âne</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="Mulets.html">Mulets</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="Girafe.html">Girafe</a></li>
    </ul>
    <h1 class="header-title text-white fs-3 d-flex align-items-center justify-content-between">
        Personnel
        <span class="toggle-icon" data-target="#personnelList">▼</span>
    </h1>
    <ul id="personnelList" class="nav flex-column mt-3">
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalJean">Dupont Jean</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalMarie">Martin Marie</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalLuc">Bernard Luc</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalSophie">Petit Sophie</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalPierre">Leroy Pierre</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalClaire">Moreau Claire</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalThomas">Lefebvre Thomas</a></li>
        <li class="nav-item"><a class="nav-link text-white fw-bold" href="#" data-bs-toggle="modal" data-bs-target="#modalLaura">Roux Laura</a></li>
    </ul>
</nav>
        <!-- Modal for Jean -->
        <div class="modal fade" id="modalJean" tabindex="-1" aria-labelledby="modalJeanLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalJeanLabel">Détails de Dupont Jean</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>

                    <div class="modal-body">
                        <img src="./images/personnel/dupont.jpg" class="img-fluid mb-3" alt="Dupont Jean">
                        <p><strong>Nom :</strong> Dupont Jean</p>
                        <p><strong>Rôle :</strong> Soigneur</p>
                        <p><strong>Âge :</strong> 35 ans</p>
                        <p><strong>Description :</strong> Jean travaille avec les animaux depuis plus de 10 ans. Il est spécialisé dans les soins aux petits mammifères et a un grand cœur.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Contacter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal for Marie -->
        <div class="modal fade" id="modalMarie" tabindex="-1" aria-labelledby="modalMarieLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMarieLabel">Détails de Martin Marie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <img src="./images/personnel/marie.jpg" class="img-fluid mb-3" alt="Martin Marie">
                        <p><strong>Nom :</strong> Martin Marie</p>
                        <p><strong>Rôle :</strong> Soigneuse</p>
                        <p><strong>Âge :</strong> 28 ans</p>
                        <p><strong>Description :</strong> Marie est spécialisée dans les soins aux oiseaux exotiques et adore partager sa passion pour la faune avec les visiteurs.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Contacter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal for Luc -->
        <!-- You can replicate the above modal structure for the other individuals (Luc, Sophie, etc.) with their respective details -->
        <!-- Modal for Luc example -->
        <div class="modal fade" id="modalLuc" tabindex="-1" aria-labelledby="modalLucLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLucLabel">Détails de Bernard Luc</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <img src="./images/personnel/claire.jpg" class="img-fluid mb-3" alt="Bernard Luc">
                        <p><strong>Nom :</strong> Bernard Luc</p>
                        <p><strong>Rôle :</strong> Soigneur</p>
                        <p><strong>Âge :</strong> 42 ans</p>
                        <p><strong>Description :</strong> Luc est un vétérinaire expérimenté et un expert en soins d'animaux sauvages. Il adore travailler avec les grandes espèces carnivores.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Contacter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Sophie -->
<div class="modal fade" id="modalSophie" tabindex="-1" aria-labelledby="modalSophieLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSophieLabel">Détails de Petit Sophie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <img src="./images/personnel/sophie.jpg" class="img-fluid mb-3" alt="Petit Sophie">
                <p><strong>Nom :</strong> Petit Sophie</p>
                <p><strong>Rôle :</strong> Soigneuse</p>
                <p><strong>Âge :</strong> 30 ans</p>
                <p><strong>Description :</strong> Sophie est une passionnée des petits mammifères et adore s'occuper des animaux blessés pour les réhabiliter et les libérer dans la nature.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Contacter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Pierre -->
<div class="modal fade" id="modalPierre" tabindex="-1" aria-labelledby="modalPierreLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPierreLabel">Détails de Leroy Pierre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <img src="./images/personnel/laura.jpg" class="img-fluid mb-3" alt="Leroy Pierre">
                <p><strong>Nom :</strong> Leroy Pierre</p>
                <p><strong>Rôle :</strong> Soigneur</p>
                <p><strong>Âge :</strong> 40 ans</p>
                <p><strong>Description :</strong> Pierre est spécialisé dans les soins aux reptiles et aux amphibiens. Il est également responsable de la gestion des enclos des animaux dangereux.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Contacter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Claire -->
<div class="modal fade" id="modalClaire" tabindex="-1" aria-labelledby="modalClaireLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalClaireLabel">Détails de Moreau Claire</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <img src="./images/personnel/pierre.jpg" class="img-fluid mb-3" alt="Moreau Claire">
                <p><strong>Nom :</strong> Moreau Claire</p>
                <p><strong>Rôle :</strong> Administratif</p>
                <p><strong>Âge :</strong> 33 ans</p>
                <p><strong>Description :</strong> Claire travaille dans la gestion administrative et aide à coordonner les activités au sein du parc. Elle est également responsable de la communication avec les visiteurs.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Contacter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Thomas -->
<div class="modal fade" id="modalThomas" tabindex="-1" aria-labelledby="modalThomasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalThomasLabel">Détails de Lefebvre Thomas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <img src="/images/personnel/claire3.jpg" class="img-fluid mb-3" alt="Lefebvre Thomas">
                <p><strong>Nom :</strong> Lefebvre Thomas</p>
                <p><strong>Rôle :</strong> Cadre</p>
                <p><strong>Âge :</strong> 38 ans</p>
                <p><strong>Description :</strong> Thomas supervise les opérations du parc et prend des décisions stratégiques pour le bien-être des animaux et la sécurité du personnel.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Contacter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Laura -->
<div class="modal fade" id="modalLaura" tabindex="-1" aria-labelledby="modalLauraLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLauraLabel">Détails de Roux Laura</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <img src="./images/personnel/claire1.jpg" class="img-fluid mb-3" alt="Roux Laura">
                <p><strong>Nom :</strong> Roux Laura</p>
                <p><strong>Rôle :</strong> Administratif</p>
                <p><strong>Âge :</strong> 27 ans</p>
                <p><strong>Description :</strong> Laura est responsable de la gestion des ressources humaines et s'occupe de l'accueil des nouveaux employés dans le parc.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Contacter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

        <!-- Vous pouvez ajouter plus de modales pour les autres personnes (Sophie, Pierre, etc.) en suivant le même modèle -->
        


</header>