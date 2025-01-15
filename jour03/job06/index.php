<?php

$str = "Les choses que l on Possede finissent par nous posseder.";

$reversedStr = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}


echo $reversedStr;
?>
