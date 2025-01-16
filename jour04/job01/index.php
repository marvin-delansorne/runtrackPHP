<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test GET</title>
</head>
<body>
    <h2>Formulaire de test pour la méthode GET</h2>
    <form action="page.php" method="GET">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php

$compteur = 0;


foreach ($_GET as $key => $value) {
   
    if (isset($key) && isset($value)) {
        $compteur++;  
    }
}
 
echo "Le nombre d'arguments passés dans l'URL est : $compteur";
?>