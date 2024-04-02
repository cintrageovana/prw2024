<?php
list($hi, $mi, $hf, $mf) = explode(' ', readline());

$duracao_horas = $hf - $hi;
$duracao_minutos = $mf - $mi;

if ($duracao_minutos < 0) {
    $duracao_minutos += 60;
    $duracao_horas--;
}

if ($duracao_horas < 0) {
    $duracao_horas += 24;
}
if ($duracao_horas == 0 && $duracao_minutos == 0) {
    $duracao_horas = 24;
}

echo "O JOGO DUROU $duracao_horas HORA(S) E $duracao_minutos MINUTO(S)\n";
?>