<?php
session_start();
include_once ('include/config.php');
?>

<!-- HEADER avec Menu Burger -->
<?php include_once ('include/header.php'); ?>

<!-- Contenu principal : Affichage des membres du personnel -->
<main class="container mt-5">
    <h2 class="mb-4 text-center">Membres du Personnel</h2>

    <div class="row">
        <?php
        $sql = "SELECT * FROM personnel";
        $stmt = $pdo->query($sql);
        $personnel = $stmt->fetchAll();

        foreach ($personnel as $person) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $person['prenom'] . ' ' . $person['nom']; ?></h5>
                        <p class="card-text">
                            <strong>Poste :</strong> <?php echo $person['poste']; ?><br>
                            <strong>Login :</strong> <?php echo $person['login']; ?><br>
                        </p>
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