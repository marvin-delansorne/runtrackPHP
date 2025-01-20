<?php
// Fonction pour appliquer la transformation "gras"
function gras($str) {
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (isset($mot[0]) && ctype_upper($mot[0])) { // Vérifie si le mot commence par une majuscule
            $mot = "<b>$mot</b>";
        }
    }
    return implode(' ', $mots);
}

// Fonction pour appliquer la transformation "césar"
function cesar($str, $shift = 2) {
    $resultat = '';
    $str = strtolower($str); // On travaille en minuscule pour éviter les problèmes avec les majuscules

    for ($i = 0; isset($str[$i]); $i++) {
        $char = $str[$i];

        // Vérifier si c'est une lettre
        if (ctype_alpha($char)) {
            $decalage = ord($char) + $shift;

            // Si on dépasse 'z', on recommence à partir de 'a'
            if ($decalage > ord('z')) {
                $decalage -= 26;
            }
            $resultat .= chr($decalage);
        } else {
            $resultat .= $char; // Ne rien faire si ce n'est pas une lettre
        }
    }
    return $resultat;
}

// Fonction pour appliquer la transformation "plateforme"
function plateforme($str) {
    $mots = explode(' ', $str);
    foreach ($mots as &$mot) {
        if (substr($mot, -2) === "me") { // Vérifie si le mot se termine par "me"
            $mot = str_replace('me', '_', $mot);
        }
    }
    return implode(' ', $mots);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = isset($_POST['str']) ? $_POST['str'] : '';
    $transformation = isset($_POST['transformation']) ? $_POST['transformation'] : '';

    if ($transformation == 'gras') {
        $resultat = gras($str);
    } elseif ($transformation == 'cesar') {
        $resultat = cesar($str);
    } elseif ($transformation == 'plateforme') {
        $resultat = plateforme($str);
    } else {
        $resultat = $str;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de transformations</title>
</head>
<body>

<form method="POST">
    <label for="str">Entrez une chaîne de caractères :</label>
    <input type="text" id="str" name="str" value="<?php echo isset($str) ? htmlspecialchars($str) : ''; ?>" required><br><br>

    <label for="transformation">Choisir une transformation :</label>
    <select id="transformation" name="transformation">
        <option value="gras" <?php echo (isset($transformation) && $transformation == 'gras') ? 'selected' : ''; ?>>Gras</option>
        <option value="cesar" <?php echo (isset($transformation) && $transformation == 'cesar') ? 'selected' : ''; ?>>César</option>
        <option value="plateforme" <?php echo (isset($transformation) && $transformation == 'plateforme') ? 'selected' : ''; ?>>Plateforme</option>
    </select><br><br>

    <input type="submit" value="Appliquer la transformation">
</form>

<?php if (isset($resultat)): ?>
    <h3>Résultat :</h3>
    <p><?php echo htmlspecialchars($resultat); ?></p>
<?php endif; ?>

</body>
</html>