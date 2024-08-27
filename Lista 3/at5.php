<?php
    $data =  $_GET['data'];
    $dia = substr($data,8,9);
    $mes = substr($data,5,2);
    $ano = substr($data,0,4);
    
    $data1 = date_create($data);

    $dia_semana = date_format($data1, 'w');

    switch ($dia_semana) {
        case 0:
            $dia_semana = 'Domingo';
            break;
        case 1:
            $dia_semana = 'Segunda-feira';
            break;
        case 2:
            $dia_semana = 'Terça-feira';
            break;
        case 3:
            $dia_semana = 'Quarta-feira';
            break;
        case 4:
            $dia_semana = 'Quinta-feira';
            break;
        case 5:
            $dia_semana = 'Sexta-feira';
            break;
        case 6:
            $dia_semana = 'Sábado';
            break;
        default:
            $dia_semana = 'Dia inválido';
            break;
    }

    echo "O dia da semana é: " . $dia_semana;
?>