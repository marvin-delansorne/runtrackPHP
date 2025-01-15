<?php

$str = "On nest pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$voyelles = "aeiouyAEIOUY";
$consonnes = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";

for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];
    
   
    $isVoyelle = false;
    for ($j = 0; isset($voyelles[$j]); $j++) {
        if ($char == $voyelles[$j]) {
            $isVoyelle = true;
            break;
        }
    }
 
    $isConsonne = false;
    for ($j = 0; isset($consonnes[$j]); $j++) {
        if ($char == $consonnes[$j]) {
            $isConsonne = true;
            break;
        }
    }
    
  
    if ($isVoyelle) {
        $dic["voyelles"]++;
    }
   
    elseif ($isConsonne) {
        $dic["consonnes"]++;
    }
}

echo "<table border='1'>";
echo "<tr><th>Voyelles</th><th>Consonnes</th></tr>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</table>";