<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$i = 0;
while (isset($str[$i])) {
    $voyelle = strtolower($str[$i]);
    if ($voyelle == 'a' || $voyelle == 'e' || $voyelle == 'i' || $voyelle == 'o' || $voyelle == 'u') {
        echo $str[$i];
    }
    $i++;
}
