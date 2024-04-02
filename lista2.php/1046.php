<?php
list($hi, $hf) = explode(' ', readline());

if ($hi < $hf) {
    $duracao = $hf - $hi;
} elseif ($hi > $hf) {
    $duracao = (24 - $hi) + $hf;
} else {
    $duracao = 24;
}

echo "O JOGO DUROU $duracao HORA(S)\n";
?>