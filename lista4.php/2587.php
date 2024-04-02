<?php
$X = intval(readline());

for ($i = 0; $i < $X; $i++) {
    $PD1 = readline();
    $PD2 = readline();
    $PD1 = str_split($PD1);
    $PD2 = str_split($PD2);
    $PA = readline();
    $PA = str_split($PA);
    
    $caracteres = array_keys($PA, "_");
    
    if ($PD1[$caracteres[0]] == $PD2[$caracteres[1]] || $PD1[$caracteres[1]] == $PD2[$caracteres[0]])
        echo "Y\n";
    else
        echo "N\n";
}
?>