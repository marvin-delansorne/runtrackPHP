<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau $_GET</title>

    <form method="GET" action="">
        <label for="argument1">Argument 1 :</label>
        <input type="text" id="argument1" name="argument1"><br><br>

        <label for="argument2">Argument 2 :</label>
        <input type="text" id="argument2" name="argument2"><br><br>

        <label for="argument3">Argument 3 :</label>
        <input type="text" id="argument3" name="argument3"><br><br>

        <button type="Envoyer">Envoyer</button>
    </form>

    <h2>Résultat</h2>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Arguments $_GET et valeurs associées</h1>
    <?php
    
    if (isset($_GET) && !empty($_GET)) {
        echo '<table>';
        echo '<thead>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        echo '</thead>';
        echo '<tbody>';
        
        
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($key) . '</td>'; 
            echo '<td>' . htmlspecialchars($value) . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p style="text-align: center;">Aucun paramètre $_GET n\'a été passé.</p>';
    }
    ?>
</body>
</html>