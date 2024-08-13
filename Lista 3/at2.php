<?php
    $frase = "Olá mundo";
    $tamanho = strlen($frase);
    $frase = strtoupper($frase);
    echo "Frase: ".$frase."<br>";

    for ($i = 0; $i < $tamanho; $i++) {
        if ($frase[$i] == "A" || $frase[$i] == "E" || $frase[$i] == "I" || $frase[$i] == "O" || $frase[$i] == "U") {
            $frase[$i] = "x";
        }
    }

    echo "Frase com vogais em x: ".$frase;
?>
