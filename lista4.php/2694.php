<?php

$casos = intval(fgets(STDIN));

while ($casos--) {
    fscanf(STDIN, "%s\n", $caracteres);
    $tam = strlen($caracteres);
    $j = 1;
    $soma = 0;

    for ($aux = $tam; $aux > 0; $aux--) {
        $numeros = array();
        $contador = 0;

        for ($i = $j; $i < $tam; $i++) {
            if (ctype_digit($caracteres[$i])) {
                $contador++;
                $numeros[] = intval($caracteres[$i]);
            } else {
                $i++;
                break;
            }
        }
        $j = $i;

        for ($l = 0, $z = $contador; $l < $contador; $l++, $z--) {
            if ($z == 1) {
                $soma += $numeros[$l];
            } elseif ($z == 2) {
                $soma += $numeros[$l] * 10;
            } elseif ($z == 3) {
                $soma += $numeros[$l] * 100;
            }
        }
    }
    echo $soma . "\n";
}
?>