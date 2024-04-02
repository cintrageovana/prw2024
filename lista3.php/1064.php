<?php
for($i=0; $i<6; $i++){
    $valor = floatval(readline());
    if($valor>0){
        $n = $n+1;
        $m += $valor;
    }
}
$MED = $m/$n;

echo $n." valores positivos\n";
echo number_format($MED, 1, '.', '' ).PHP_EOL;
?>