<?php
include_once('./include/header.php');
?>

<!-- Container pour afficher la carte de l'animal -->
<div class="container">
  <div class="row">
    <!-- Card pour l'animal -->
    <div class="col-md-4 mb-4">
      <div class="card" style="width: 18rem;">
        <img src="images/animal/Chien1.jpg" class="card-img-top" alt="Nom de l'animal">
        <div class="card-body">
          <h5 class="card-title">Thor</h5>
          <p class="card-text">
            <strong>Sexe :</strong> M<br>
            <strong>Âge :</strong> 3 ans
          </p>
          <button type="button" class="btn btn-lightbrown" data-bs-toggle="modal" data-bs-target="#animalModal">Plus d'informations</button>
        </div>
      </div>
    </div>

    <!-- Modal pour afficher les détails de l'animal -->
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
  </div>
</div>

<?php
include_once('./include/footer.php');
?>
