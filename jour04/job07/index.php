<?php
// Vérification de la soumission du formulaire et récupération des valeurs
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    // Récupération des valeurs des champs
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];

    // Vérification que les valeurs sont numériques et supérieures à 0
    if (is_numeric($largeur) && is_numeric($hauteur) && $largeur > 0 && $hauteur > 0) {
        // Dessiner la maison
        // Toit
        for ($i = 0; $i < $hauteur; $i++) {
            echo str_repeat(' ', $hauteur - $i - 1) . str_repeat('*', 2 * $i + 1) . "<br>";
        }
        
        // Corps de la maison (rectangle)
        for ($i = 0; $i < $largeur; $i++) {
            echo '*' . str_repeat(' ', 2 * ($hauteur - 1) - 2) . '*' . "<br>";
        }
    } else {
        echo "Veuillez entrer des valeurs valides pour la largeur et la hauteur.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
</head>
<body>
    <h1>Formulaire de Maison</h1>
    <form action="" method="GET">
        <label for="largeur">Largeur :</label>
        <input type="text" id="largeur" name="largeur" required><br><br>
        
        <label for="hauteur">Hauteur :</label>
        <input type="text" id="hauteur" name="hauteur" required><br><br>

        <input type="submit" value="Dessiner la Maison">
    </form>
</body>
</html>
