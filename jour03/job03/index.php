<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$long = strlen($str);


for($i = 0 ; $i < $long ; $i ++){
    $voyelle = strtolower($str[$i]);
    if ($voyelle == 'a' || $voyelle == 'e' || $voyelle == 'i' ||$voyelle == 'o' || $voyelle == 'u'){
        echo $str[$i];
    }
    }
