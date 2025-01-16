<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$modifiedStr = "";


$i = 0;
$chars = [];
while (isset($str[$i])) {
    $chars[] = $str[$i];  
    $i++;
}

for ($i = 0; isset($chars[$i]); $i++) {
    if (isset($chars[$i + 1])) {
        $modifiedStr .= $chars[$i + 1]; 
    } else {
        $modifiedStr .= $chars[0];  
    }
}

echo $modifiedStr;
?>