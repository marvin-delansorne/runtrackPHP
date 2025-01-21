<?php

session_start();

if (!isset($_SESSION['nb_visites'])){
    $_SESSION['nb_visites'] = 0;
}

if (isset($_POST['reset'])){
    $_SESSION['nb_visites'] = 0 ;
}

else{
    $_SESSION['nb_visites'] ++;
}

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Compteur de visite </h1>
    <p> Nombre de visites : <?php echo $_SESSION['nb_visites'] ; ?> </p>
    <form method= "post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
</body>
</html>

