<?php

if (isset($_POST['prenom'])) {
    
    setcookie('prenom', $_POST['prenom'], time() + (30 * 24 * 60 * 60), '/');
    $_COOKIE['prenom'] = $_POST['prenom'];  
}


if (isset($_POST['deco'])) {
    
    setcookie('prenom', '', time() - 3600, '/');  // 
    unset($_COOKIE['prenom']);  
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>

<?php

if (isset($_COOKIE['prenom'])) {
    echo "<h1>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !</h1>";
    echo '<form method="POST">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
  
    echo '<h1>Veuillez vous connecter</h1>';
    echo '<form method="POST">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
?>

</body>
</html>