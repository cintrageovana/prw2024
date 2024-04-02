<?php
$valores = explode(" ", readline());
if($valores[0]!=0){
$del = ($valores[1] * $valores[1]) -( 4 * $valores[0] * $valores[2]);
 if($del>=0){
     $R1 = (-($valores[1]) + sqrt($del)) / (2 * $valores[0]);
     $R2 =(-($valores[1]) - sqrt($del)) / (2 * $valores[0]);
     echo "R1 = ". number_format($R1, 5, '.', ''). PHP_EOL;
      echo "R2 = ". number_format($R2, 5, '.', ''). PHP_EOL;
 } 
 else{
 echo "Impossivel calcular".PHP_EOL;}
}
else{
echo "Impossivel calcular".PHP_EOL;}
?>