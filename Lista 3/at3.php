<?php
    $cep = $_GET['cep'];
    $finalcep=substr($cep,5,3);
    echo "Os 3 ultimos numeros do seu cep é: ".$finalcep;
?>