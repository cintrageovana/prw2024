<?php
$s = floatval(readline());
if ($s >= 0.00 && $s <= 400.00) {
    $per = 15;
} elseif ($s <= 800.00) {
    $per  = 12;
} elseif ($s <= 1200.00) {
    $per = 10;
} elseif ($s <= 2000.00) {
    $per = 7;
} else {
    $per= 4;
}
$reajuste = $s * ($per / 100);
$nS = $s + $reajuste;
echo "Novo salario: ". number_format($nS, 2, ".", '').PHP_EOL;
echo "Reajuste ganho: " .  number_format($reajuste, 2, ".", ''). PHP_EOL;
echo "Em percentual: " . $per . " %\n";
?>