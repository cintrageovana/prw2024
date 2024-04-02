<?php
for($i=0; $i<5; $i++){
    $valor = floatval(readline());
    if(($valor %= 2) === 0){
        $n=$n + 1;
    }
}
echo $n ." valores pares\n";
?>