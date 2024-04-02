<?php
$p = 0;
$im = 0;
$n = 0;
$po = 0;

for ($i = 0; $i < 5; $i++) {
    $val = intval(readline());

    if ($val % 2 == 0) {
        $p++;
    } else {
        $im++;
    }
    if ($val > 0) {
        $po++;
    } elseif ($val < 0) {
        $n++;
    }
}

echo $p . " valor(es) par(es)\n";
echo $im . " valor(es) impar(es)\n";
echo $po . " valor(es) positivo(s)\n";
echo $n . " valor(es) negativo(s)\n";
?>