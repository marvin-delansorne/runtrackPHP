<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données POST</title>
</head>
<body>
    
    <form method="post" action="">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    
    if (isset($_POST) && !empty($_POST)) {
        // Commencer le tableau HTML
        echo "<h2>Résultat :</h2>";
        echo "<table border='1'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Argument</th>";
        echo "<th>Valeur</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        
        foreach ($_POST as $key => $value) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>"; 
            echo "<td>" . htmlspecialchars($value) . "</td>"; 
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
       
        echo "<p>Aucune donnée envoyée via le formulaire.</p>";
    }
    ?>
</body>
</html>