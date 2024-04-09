<?php
    $numj = intval (readline());
    $S = 0;
    $B = 0;
    $A = 0;
    $S1 = 0;
    $B1 = 0;
    $A1 = 0;
    for($i=0; $i<$numj; $i++){
     $nomes = readline();
     list($s, $b, $a) = explode(" ", readline());
     list($s1, $b1, $a1) = explode(" ", readline());
     $S += $s;
     $B += $b;
     $A += $a;
     $S1 += $s1;
     $B1 += $b1;
     $A1 += $a1;
    }
    $ss = number_format($S1*100/$S, 2, ".", "");
    $bb = number_format($B1*100/$B, 2, ".", "");
    $aa = number_format($A1*100/$A, 2, ".", "");
    
    echo "Pontos de Saque: $ss %.\n";
    echo "Pontos de Bloqueio: $bb %.\n";
    echo "Pontos de Ataque: $aa %.\n";
?>