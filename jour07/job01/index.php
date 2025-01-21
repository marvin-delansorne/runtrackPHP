<?php 


setcookie('visite', '1', time() + (3600), "/") ;




if (!isset($_COOKIE['visite'])) {
    $visite = 1;
    setcookie('visite', '1', time() + (3600), "/");
} else {
    $visite = $_COOKIE['visite'] + 1;
    setcookie('visite', $visite, time() + (3600), "/");
}

echo "Vous avez visité ce site " . $visite . " fois.";

if (isset($_POST['reset'])){
    $visite = 0;
    setcookie('visite', '0', time() + (3600), "/") ;
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
<form method="post">
    <input type="submit" name="reset" value="Réinitialiser le compteur">
</form>
</body>
</html>

