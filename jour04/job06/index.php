<?php
// Vérification de la soumission du formulaire et récupération du paramètre 'nombre'
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nombre'])) {
    // Récupération du nombre envoyé
    $nombre = $_GET['nombre'];

    // Vérification si le nombre est bien un entier
    if (is_numeric($nombre)) {
        // Convertir le nombre en entier
        $nombre = (int)$nombre;

        // Vérification si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Nombre</title>
</head>
<body>
    <h1>Vérification d'un nombre</h1>
    <form action="" method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <input type="submit" value="Vérifier">
    </form>
</body>
</html>