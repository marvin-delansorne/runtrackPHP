<?php
// Déclaration des variables de types primitifs
$booleanVar = true;
$intVar = 42;
$stringVar = "Hello, World!";
$floatVar = 3.14;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Tableau des variables</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>boolean</td>
                <td>$booleanVar</td>
                <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>integer</td>
                <td>$intVar</td>
                <td><?php echo $intVar; ?></td>
            </tr>
            <tr>
                <td>string</td>
                <td>$stringVar</td>
                <td><?php echo $stringVar; ?></td>
            </tr>
            <tr>
                <td>float</td>
                <td>$floatVar</td>
                <td><?php echo $floatVar; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
