<?php

$nombre = 0;

while ($nombre <= 100){
    
     if($nombre <= 20){
        echo "<i> $nombre </i><br>";
        }
    
        elseif($nombre === 42 ){
            echo "La Plateforme_<br>" ;
        }
    
    elseif($nombre >= 25  && $nombre <= 50){
        echo "<u> $nombre </u> <br>";
    }
    

     else {
        echo  $nombre , '<br>' ;
    }

    $nombre ++;
}


?>