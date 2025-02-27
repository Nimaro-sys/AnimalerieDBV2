<?php
// Récupérer l'ID de la cage depuis l'URL
$id_cage = $_GET['id'];

header("Location: ../login.php");

require_once '../include/header.php';

// Récupérer les informations de la cage depuis la base de données
$stmt = $pdo->prepare("SELECT * FROM cage WHERE id_cage = ?");
$stmt->execute([$id_cage]);
$cage = $stmt->fetch();

// Afficher le formulaire de modification
if ($cage) {
    echo "<form action='traitement_modification.php' method='post'>
            <input type='hidden' name='id_cage' value='{$cage['id_cage']}'>
            <label for='salle'>Salle:</label>
            <input type='text' name='salle' value='{$cage['salle']}'><br>
            <label for='allee'>Allée:</label>
            <input type='text' name='allee' value='{$cage['allee']}'><br>
            <label for='numero'>Numéro:</label>
            <input type='text' name='numero' value='{$cage['numero']}'><br>
            <input type='submit' value='Enregistrer les modifications'>
          </form>";
} else {
    echo "Cage non trouvée.";
}
require_once '../include/footer.php';
?>