<?php

$str = "Les choses que l on Possede finissent par nous posseder.";
$reversedStr = "";
$i = 0;


while (isset($str[$i])) {
    $i++;
}

$i--; 
while ($i >= 0) {
    $reversedStr .= $str[$i];
    $i--;
}

echo $reversedStr;
?>