<?php
$x = intval(readline());
$y = intval(readline());
$val=0;
if($x!=$y){
    if($x>$y){
      $maior=$x;
      $menor = $y;
}
else{
      $maior=$y;
    $menor = $x;
}
while($menor<$maior){
    $menor++;
    if($menor%2 !=0 && $menor!=$maior){
        $val+=$menor;
    }
}
echo $val.PHP_EOL;
}
else{
    echo "0";
}
?>