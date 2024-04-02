<?php
$maior=0;
$posicao = 0;
for($i=1; $i<=100; $i++){
    $n=intval(readline());
    if($maior<$n){
        $maior=$n;
        $posicao=$i;
    }
}
echo "$maior\n$posicao\n";
?>