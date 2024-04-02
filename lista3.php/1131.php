<?php
$x=1;
$inter=0;
$gremio=0;
$empate=0;
while($x==1){
echo "Novo grenal (1-sim 2-nao)\n";
list($x, $y)=explode(" ", readline());
if($x>$y){
    $inter++;
}
elseif($x<$y){
    $gremio++;
}
elseif($x==$y){
    $empate++;
}
$quant++;
$x= readline();
}
echo "$quant grenais\n";
echo "Inter:$inter\n";
echo "Gremio:$gremio\n";
echo "Empates:$empate\n";
if($inter>$gremio){
    echo "Inter venceu mais\n";
}

if($gremio>$inter){
    echo "Gremio venceu mais\n";
}

if($inter==$gremio){
    echo "Nao houve vencedor\n";
}
?>