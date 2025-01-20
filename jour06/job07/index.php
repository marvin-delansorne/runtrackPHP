<?php
// Fonction pour transformer la chaîne en "gras" pour les mots commençant par une majuscule
function transformationGras($str) {
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (ctype_upper($word[0])) {
            $word = "<strong>" . $word . "</strong>"; // Mettre en gras les mots commencant par une majuscule
        }
    }
    return implode(" ", $words);
}

// Fonction César : décalage des caractères d'une chaîne de texte
function transformationCesar($str, $shift = 2) {
    $result = "";
    foreach (str_split($str) as $char) {
        if (ctype_alpha($char)) {
            $asciiOffset = ctype_lower($char) ? 97 : 65; // 'a' ou 'A' en ASCII
            $result .= chr((ord($char) - $asciiOffset + $shift) % 26 + $asciiOffset);
        } else {
            $result .= $char; // Ne pas transformer les caractères non alphabétiques
        }
    }
    return $result;
}

// Fonction pour transformer les mots finissant par "me" en ajoutant des "_"
function transformationPlateforme($str) {
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (substr($word, -2) === "me") {
            $word .= "_";
        }
    }
    return implode(" ", $words);
}

// Récupérer les données du formulaire
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = $_POST['inputText'];
    $transformation = $_POST['transformation'];
    
    // Appliquer la transformation selon le choix
    if ($transformation == "gras") {
        $result = transformationGras($inputText);
    } elseif ($transformation == "cesar") {
        $result = transformationCesar($inputText, 2); // Décalage par défaut de 2
    } elseif ($transformation == "plateforme") {
        $result = transformationPlateforme($inputText);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de texte</title>
</head>
<body>
    <h1>Formulaire de transformation de texte</h1>
    <form method="post" action="">
        <label for="inputText">Entrez du texte :</label><br>
        <input type="text" id="inputText" name="inputText" required><br><br>

        <label for="transformation">Choisissez une transformation :</label><br>
        <select name="transformation" id="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César (décalage de 2)</option>
            <option value="plateforme">Plateforme (ajouter _ aux mots finissant par 'me')</option>
        </select><br><br>

        <button type="submit">Appliquer</button>
    </form>

    <?php if ($result): ?>
        <h2>Résultat :</h2>
        <p><?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>