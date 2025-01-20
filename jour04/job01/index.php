<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arguments pour test $_GET</title>
</head>
<body>
    <h1>Formulaire $_GET</h1>

   
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
    <?php
    

    if (isset($_GET)) {

        $nombreArguments = 0;
        foreach ($_GET as $key => $value) {
            $nombreArguments++;
        }

  
        if ($nombreArguments > 0) {
            echo "Nombre d'arguments passés via \$_GET : " . $nombreArguments . "<br>";

            echo "<pre>";
            foreach ($_GET as $key => $value) {
                echo($key) . " : " . ($value) . "\n";
            }
            echo "</pre>";
        } else {
            echo "Aucun argument n'a été passé via \$_GET.";
        }
    } else {
        echo "Aucun argument n'a été passé via \$_GET.";
    }
    ?>
</body>
</html>