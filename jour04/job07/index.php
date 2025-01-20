<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de MA Maison</title>
</head>
<body>
    <h1>MA Maison</h1>
    <form method="post">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" min="3" required>
        <br>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" min="2" required>
        <br>
        <button type="submit">Générer</button>
    </form>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        $largeur = (int)$_POST['largeur'];
        $hauteur = (int)$_POST['hauteur'];

        // Validation des dimensions
        if ($largeur < 3 || $hauteur < 2) {
            echo "<p>La largeur doit être >= 3 et la hauteur >= 2.</p>";
        } else {
            echo "<pre>";

            // Générer le toit
            for ($i = 0; $i < $largeur; $i++) {
                for ($j = 0; $j < $largeur * 2 - 1; $j++) {
                    if ($j >= $largeur - 1 - $i && $j <= $largeur - 1 + $i) {
                        echo "*";
                    } else {
                        echo " ";
                    }
                }
                echo "\n";
            }

            // Générer le corps de la maison
            for ($i = 0; $i < $hauteur; $i++) {
                for ($j = 0; $j < $largeur * 2 - 1; $j++) {
                    if ($j == 0 || $j == $largeur * 2 - 2) {
                        echo "|";
                    } else {
                        echo " ";
                    }
                }
                echo "\n";
            }

            // Générer le sol de la maison
            for ($j = 0; $j < $largeur * 2 - 1; $j++) {
                echo "-";
            }

            echo "</pre>";
        }
    }
    ?>
</body>
</html>