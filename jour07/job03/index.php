<?php 
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}


if (isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $prenom = trim($_POST['prenom']); 
    $_SESSION['prenoms'][] = $prenom;
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prénoms</title>
</head>
<body>
    <h1>Entrez votre prénom</h1>
    <form method="post">
        <label for="prenom">Votre prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom">
        <button type="submit">Entrez</button>
    </form>

    <h2>Prénoms enregistrés :</h2>
    <ul>
        <?php

        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>$prenom</li>";
        }
        
        ?>
    </ul>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>