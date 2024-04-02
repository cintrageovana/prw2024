<?php

$texto = explode(" ", rtrim(fgets(STDIN)));

$i = 0;
$j = 0;

foreach ($texto as $palavra) {
    $texto[$i++] = $palavra;
}

$k = 0;
$flag = false;

foreach ($texto as $palavra) {
    if (!$flag) {
        if (strlen($palavra) >= 4) {
            if ($palavra[$k] == $palavra[$k + 2] && $palavra[$k + 1] == $palavra[$k + 3]) {
                echo substr($palavra, $k + 2);
                $flag = true;
            } else {
                echo $palavra;
                $flag = true;
            }
        } else {
            echo $palavra;
            $flag = true;
        }
    } else {
        if (strlen($palavra) >= 4) {
            if ($palavra[$k] == $palavra[$k + 2] && $palavra[$k + 1] == $palavra[$k + 3]) {
                echo " " . substr($palavra, $k + 2);
                $flag = true;
            } else {
                echo " " . $palavra;
            }
        } else {
            echo " " . $palavra;
        }
    }
}

echo "\n";

?>