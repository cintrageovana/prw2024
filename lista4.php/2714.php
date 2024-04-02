<?php

while (fscanf(STDIN, "%hu\n", $casos) === 1) {

    while ($casos--) {

        fscanf(STDIN, "%s\n", $regAcademico);

        $tam = strlen($regAcademico);

        if ($tam != 20 || $regAcademico[0] != 'R' || $regAcademico[1] != 'A') {
            echo "INVALID DATA\n";
            continue;
        }

        $numeros = '';

        $i = 2;
        while ($i < $tam && $regAcademico[$i] == '0') {
            $i++;
        }

        while ($i < $tam) {
            $numeros .= $regAcademico[$i++];
        }

        echo $numeros . "\n";

    }

}
?>