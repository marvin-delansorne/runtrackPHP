<?php
function leetSpeak($str) {
    $leet = array(
        'a' => '4', 'b' => '8', 'e' => '3', 'g' => '6', 'l' => '1', 'o' => '0',
        's' => '5', 't' => '7', 'z' => '2'
    );
    
    $result = '';
    for ($i = 0; isset($str[$i]); $i++) {
        $char = strtolower($str[$i]);
        if (isset($leet[$char])) {
            $result .= $leet[$char];
        } else {
            $result .= $str[$i];
        }
    }
    
    return $result;
}

echo leetSpeak("Hello la plateforme");