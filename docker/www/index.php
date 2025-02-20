<?php
include_once('./include/header.php');

?>

<link rel="stylesheet" href="./css/style_index.css">
<!--Affichage des animaux sous forme de cards-->
      <!-- Contenu principal -->
      <main class="col-md-9 col-lg-10 p-4">
        <main class="col-md-9 col-lg-10 p-4 bg-image w-100 vh-100">
          <h2 class="mb-4 text-white">Bienvenue au Refuge RKG</h2>
          <p class="text-white">Sélectionnez une catégorie dans la barre latérale pour consulter leur fiche.</p>

          <!-- Card d'adoption -->
          <div class="container">
            <div class="row">
              <!-- Card 1 -->
              <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/animal/Chien1.jpg" class="card-img-top" alt="Nom de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">Thor</h5>
                    <p class="card-text">
                      <strong>Sexe :</strong> M<br>
                      <strong>Âge :</strong> 3 ans
                    </p>
                    <a href="animal_fiche.php">
                    <button type="button" class="btn btn-lightbrown"  data-bs-toggle="modal" data-bs-target="#animalModal">Plus d'informations</button>
                    </a>
                  </div>
                </div>
              </div>
          
              <!-- Modal for Thor -->
              <div class="modal fade" id="animalModal" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                      <img src="images/animal/Chien1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                      <p><strong>Nom :</strong> Thor</p>
                      <p><strong>Sexe :</strong> Masculin</p>
                      <p><strong>Âge :</strong> 3 ans</p>
                      <p><strong>Numéro d'identification :</strong> CHI001</p>
                      <p><strong>Pays d'origine :</strong> Islande</p>
                      <p><strong>Histoire :</strong> Thor adore jouer à attraper le bâton, mais il ramène toujours des pierres à la place. On l'appelle le Dieu du Mauvais Lancer.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Adopter</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
          
              <!-- Card 2 -->
              <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                  <img src="./images/animal/chevalnoir.jpg" class="card-img-top" alt="Nom de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">Shadow</h5>
                    <p class="card-text">
                      <strong>Sexe :</strong> M<br>
                      <strong>Âge :</strong> 5 ans
                    </p>
                    <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalCheval">Plus d'informations</button>
                  </div>
                </div>
              </div>
          
              <!-- Modal for Shadow -->
              <div class="modal fade" id="animalModalCheval" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                      <img src="./images/animal/chevalnoir.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                      <p><strong>Nom :</strong> Shadow</p>
                      <p><strong>Sexe :</strong> Masculin</p>
                      <p><strong>Âge :</strong> 5 ans</p>
                      <p><strong>Numéro d'identification :</strong> CHE001</p>
                      <p><strong>Pays d'origine :</strong> Espagne</p>
                      <p><strong>Histoire :</strong> Shadow est un cheval noble, apprécié pour sa grande vitesse et son agilité. Il a été un champion de course avant de prendre sa retraite.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Adopter</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
          
              <!-- Card 3 -->
              <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/animal/Elephant1.jpg" class="card-img-top" alt="Nom de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">trump</h5>
                    <p class="card-text">
                      <strong>Sexe :</strong> M<br>
                      <strong>Âge :</strong> 20 ans
                    </p>
                    <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalElephant">Plus d'informations</button>
                  </div>
                </div>
              </div>
          
              <!-- Modal for Goliath -->
              <div class="modal fade" id="animalModalElephant" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                      <img src="images/animal/Elephant1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                      <p><strong>Nom :</strong> trump</p>
                      <p><strong>Sexe :</strong> Masculin</p>
                      <p><strong>Âge :</strong> 20 ans</p>
                      <p><strong>Numéro d'identification :</strong> ELE001</p>
                      <p><strong>Pays d'origine :</strong> Afrique du Sud</p>
                      <p><strong>Histoire :</strong> trump est un éléphant à la retraite d'un cirque. Après avoir passé plusieurs années sous les projecteurs, il se repose désormais dans un environnement calme et sécurisé. Il est affectueux et aime interagir avec les soigneurs.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Adopter</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="row">
              <!-- Card 4 -->
              <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/animal/Loup1.jpg" class="card-img-top" alt="Nom de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">minessota</h5>
                    <p class="card-text">
                      <strong>Sexe :</strong> F<br>
                      <strong>Âge :</strong> 4 ans
                    </p>
                    <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalLoup">Plus d'informations</button>
                  </div>
                </div>
              </div>
          
              <!-- Modal for Luna -->
              <div class="modal fade" id="animalModalLoup" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                      <img src="images/animal/Loup1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                      <p><strong>Nom :</strong> minessota</p>
                      <p><strong>Sexe :</strong> Féminin</p>
                      <p><strong>Âge :</strong> 4 ans</p>
                      <p><strong>Numéro d'identification :</strong> LOU001</p>
                      <p><strong>Pays d'origine :</strong> Canada</p>
                      <p><strong>Histoire :</strong> minessota est une louve sauvage qui a été secourue après avoir été trouvée blessée. Elle est maintenant prête à vivre dans un environnement où elle pourra se sentir en sécurité et en harmonie avec ses congénères.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Adopter</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Card 5 -->
              <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/animal/Chat1.jpg" class="card-img-top" alt="Nom de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">garfield</h5>
                    <p class="card-text">
                      <strong>Sexe :</strong> M<br>
                      <strong>Âge :</strong> 3 ans
                    </p>
                    <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalChat">Plus d'informations</button>
                  </div>
                </div>
              </div>
          
              <!-- Modal for Milo -->
              <div class="modal fade" id="animalModalChat" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                      <img src="images/animal/Chat1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                      <p><strong>Nom :</strong> garfield</p>
                      <p><strong>Sexe :</strong> Masculin</p>
                      <p><strong>Âge :</strong> 3 ans</p>
                      <p><strong>Numéro d'identification :</strong> CHA001</p>
                      <p><strong>Pays d'origine :</strong> France</p>
                      <p><strong>Histoire :</strong> garfield a été sauvé d'un refuge surpeuplé. Il est gentil et très affectueux, adorant jouer et se câliner avec ses nouveaux propriétaires.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Adopter</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
          
              <!-- Card 6 -->
              <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                  <img src="images/animal/Serpent1.jpg" class="card-img-top" alt="Nom de l'animal">
                  <div class="card-body">
                    <h5 class="card-title">Kaa</h5>
                    <p class="card-text">
                      <strong>Sexe :</strong> F<br>
                      <strong>Âge :</strong> 2 ans
                    </p>
                    <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalSerpent">Plus d'informations</button>
                  </div>
                </div>
              </div>
          
              <!-- Modal for Viper -->
              <div class="modal fade" id="animalModalSerpent" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                      <img src="images/animal/Serpent1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                      <p><strong>Nom :</strong>Kaa</p>
                      <p><strong>Sexe :</strong> Féminin</p>
                      <p><strong>Âge :</strong> 2 ans</p>
                      <p><strong>Numéro d'identification :</strong> SER001</p>
                      <p><strong>Pays d'origine :</strong> Brésil</p>
                      <p><strong>Histoire :</strong> Kaa est un serpent de compagnie exceptionnellement calme. Elle est facile à prendre en charge et ne montre aucune agressivité.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Adopter</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="row">
                <!-- Card 7: Grisou -->
                <div class="col-md-4 mb-4">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/animal/ane1.jpg" class="card-img-top" alt="Nom de l'animal">
                    <div class="card-body">
                      <h5 class="card-title">bourriquet</h5>
                      <p class="card-text">
                        <strong>Sexe :</strong> M<br>
                        <strong>Âge :</strong> 7 ans
                      </p>
                      <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalÂne">Plus d'informations</button>
                    </div>
                  </div>
                </div>
              
                <!-- Modal for Grisou -->
                <div class="modal fade" id="animalModalÂne" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                      </div>
                      <div class="modal-body">
                        <img src="./images/animal/ane1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                        <p><strong>Nom :</strong> bourriquet</p>
                        <p><strong>Sexe :</strong> Masculin</p>
                        <p><strong>Âge :</strong> 7 ans</p>
                        <p><strong>Numéro d'identification :</strong> ANE001</p>
                        <p><strong>Pays d'origine :</strong> Italie</p>
                        <p><strong>Histoire :</strong> bourriquet est un âne qui aime les longues promenades en pleine nature et a un caractère très doux.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success">Adopter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>
              
                <!-- Card 8: Luna -->
                <div class="col-md-4 mb-4">
                  <div class="card" style="width: 18rem;">
                    <img src="images/animal/Mulet1.jpg" class="card-img-top" alt="Nom de l'animal">
                    <div class="card-body">
                      <h5 class="card-title">agassi</h5>
                      <p class="card-text">
                        <strong>Sexe :</strong> F<br>
                        <strong>Âge :</strong> 5 ans
                      </p>
                      <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalMulet">Plus d'informations</button>
                    </div>
                  </div>
                </div>
              
                <!-- Modal for Luna -->
                <div class="modal fade" id="animalModalMulet" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                      </div>
                      <div class="modal-body">
                        <img src="images/animal/Mulet1.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                        <p><strong>Nom :</strong> agassi</p>
                        <p><strong>Sexe :</strong> Féminin</p>
                        <p><strong>Âge :</strong> 5 ans</p>
                        <p><strong>Numéro d'identification :</strong> MLT001</p>
                        <p><strong>Pays d'origine :</strong> Espagne</p>
                        <p><strong>Histoire :</strong> agassi est un mulet gentil et bien élevé, qui a été utilisé pour le transport dans les montagnes. Après sa retraite, elle cherche une famille calme où elle pourra profiter de ses années dorées.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success">Adopter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>
              
                <!-- Card 9: Zara -->
                <div class="col-md-4 mb-4">
                  <div class="card" style="width: 18rem;">
                    <img src="./images/animal/girafe.jpg" class="card-img-top" alt="Nom de l'animal">
                    <div class="card-body">
                      <h5 class="card-title">sophie</h5>
                      <p class="card-text">
                        <strong>Sexe :</strong> F<br>
                        <strong>Âge :</strong> 8 ans
                      </p>
                      <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModalGirafe">Plus d'informations</button>
                    </div>
                  </div>
                </div>
              
                <!-- Modal for Zara -->
                <div class="modal fade" id="animalModalGirafe" tabindex="-1" aria-labelledby="animalModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="animalModalLabel">Détails de l'animal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                      </div>
                      <div class="modal-body">
                        <img src="./images/animal/girafe.jpg" class="img-fluid mb-3" alt="Nom de l'animal">
                        <p><strong>Nom :</strong> sophie</p>
                        <p><strong>Sexe :</strong> Féminin</p>
                        <p><strong>Âge :</strong> 8 ans</p>
                        <p><strong>Numéro d'identification :</strong> GRI001</p>
                        <p><strong>Pays d'origine :</strong> Afrique du Sud</p>
                        <p><strong>Histoire :</strong> sophie est une girafe majestueuse qui a été élevée dans un zoo. Après une carrière de vedette dans des spectacles d'animaux, elle a été mise à la retraite et cherche désormais un nouveau foyer calme et spacieux.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success">Adopter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/login.js"></script>
  <script src="JS/script.js"></script>

    </main>

<?php
include_once('./include/footer.php');
?>