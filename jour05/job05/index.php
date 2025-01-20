<?php

function occurrences($str, $char) {
    $count = 0;
    $i = 0;

 
    while (isset($str[$i])) {
        if ($str[$i] == $char) {
            $count++;
        }
        $i++;
    }

    return $count;
}

// Exemple 
$str = "Bonjour";
$char = "o";

$resultat = occurrences($str, $char);
echo " le nombre de '$char' dans '$str' est de : " . $resultat;