<?php

$n = intval(fgets(STDIN));

while ($n--) {
    fscanf(STDIN, "%s %s", $rajesh, $sheldon);
    
    if ($rajesh == $sheldon) {
        echo "empate\n";
    } elseif ($rajesh == "spock" && $sheldon == "pedra") {
        echo "rajesh\n";
    } elseif ($rajesh == "lagarto" && $sheldon == "spock") {
        echo "rajesh\n";
    } elseif ($rajesh == "tesoura" && $sheldon == "lagarto") {
        echo "rajesh\n";
    } elseif ($rajesh == "papel" && $sheldon == "spock") {
        echo "rajesh\n";
    } elseif ($rajesh == "tesoura" && $sheldon == "papel") {
        echo "rajesh\n";
    } elseif ($rajesh == "papel" && $sheldon == "pedra") {
        echo "rajesh\n";
    } elseif ($rajesh == "lagarto" && $sheldon == "papel") {
        echo "rajesh\n";
    } elseif ($rajesh == "pedra" && $sheldon == "lagarto") {
        echo "rajesh\n";
    } elseif ($rajesh == "spock" && $sheldon == "tesoura") {
        echo "rajesh\n";
    } elseif ($rajesh == "pedra" && $sheldon == "tesoura") {
        echo "rajesh\n";
    } else {
        echo "sheldon\n";
    }
}
?>