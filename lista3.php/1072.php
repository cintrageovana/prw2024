<?php
$n = intval(readline());
for($i=0; $i<$n;$i++){
    $x= floatval(readline());
    if($x<=20 && $x>=10){
        $den++;
    }
    else{
        $for++;
    }
}
echo "$den in\n$for out\n";
?>
