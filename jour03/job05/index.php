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
    if (strpos($voyelles, $char) !== false) {
        $dic["voyelles"]++;
    } elseif (strpos($consonnes, $char) !== false) {
        $dic["consonnes"]++;
    }
}

echo "<table border='1'>";
echo "<tr><th>Voyelles</th><th>Consonnes</th></tr>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</table>";
