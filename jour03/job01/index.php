<?php

$tableau = [200, 204, 173, 98, 171, 404, 459] ;

foreach($tableau as $valeur){
    if ($valeur % 2 == 0){
        echo "$valeur est paire <br />";
    }
    else{
        echo "$valeur est impair <br />";
    }
}
