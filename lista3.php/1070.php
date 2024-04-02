<?php
$n = intval(readline());
$X=0;
while($X<6){
    if($n%2 !=0){
        echo $n. PHP_EOL;
        $X++;
    }
    $n++;
}
?>