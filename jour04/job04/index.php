<?php

if (!empty($_POST)) {
   
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    
   
    foreach ($_POST as $key => $value) {
       
        if (isset($key) && isset($value)) {
            
            echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
        }
    }
    

    echo "</table>";
} else {
    echo "Aucun argument POST trouvé.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Formulaire d'exemple (POST)</h1>
    <form action="votre-script.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

