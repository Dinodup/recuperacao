<?php

    $velper = $_GET['velper'];
    $velmot = $_GET['velmot'];

    if($velmot < $velper){
        echo "O motorista está respeitando a velocidade";
    }
    elseif($velmot <= $velper*1.1){
        echo "O motorista está terá multa de 50 reais";
    }
    elseif($velmot <= $velper*1.2){
        echo "A multa será de 100 reais";
    }
    else{
        echo "A multa será de 200 reais";
    }

?>