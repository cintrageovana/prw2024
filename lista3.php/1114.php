<?php
$x=1;
while($x==1){
    $s = intval(readline());
    if($s == 2002){
        echo "Acesso Permitido\n";
        $x++;
    }
    else{
        echo "Senha Invalida\n";
    }
}
?>