<?php

function bubblesort($tab, $croissant) {
    $n = count($tab);
    
    // Boucle principale pour trier le tableau
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            // Comparer les éléments adjacents et les échanger si nécessaire
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échanger les éléments
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    
    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];
$croissant = true; // Pour un tri croissant
$tri_croissant = bubblesort($tab, $croissant);
echo "Tri croissant: " . implode(", ", $tri_croissant) . "\n";

$croissant = false; // Pour un tri décroissant
$tri_decroissant = bubblesort($tab, $croissant);
echo "Tri décroissant: " . implode(", ", $tri_decroissant) . "\n";

?>