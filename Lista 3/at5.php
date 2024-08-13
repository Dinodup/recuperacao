<?php
    $data =  $_GET['data'];
    $dia = substr($data,8,9);
    $mes = substr($data,5,2);
    $ano = substr($data,0,4);
    
    echo "Dia: " . $dia . "<br>";
    echo "Mês: " . $mes . "<br>";
    echo "Ano: " . $ano . "<br>";
?>