<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupération des valeurs POST
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Vérification des valeurs
    if ($username == 'John' && $password == 'Rambo') {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h1>Formulaire de Connexion</h1>
    <form action="" method="POST">
        <label for="username">Username :</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>