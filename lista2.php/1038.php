<?php
list($c, $q) = explode(' ', readline());
if ($c==1){
    echo "Total: R$ ", number_format(($q*4), 2, ".", " ").PHP_EOL;
}
elseif ($c==2){
    echo "Total: R$ ", number_format(($q*4.5), 2, ".", " ").PHP_EOL;
}
elseif ($c==3){
    echo "Total: R$ ", number_format(($q*5), 2, ".", " ").PHP_EOL;
}
else if ($c==4){
    echo "Total: R$ ", number_format(($q*2), 2, ".", " ").PHP_EOL;
} 
elseif ($c==5){
    echo "Total: R$ ", number_format(($q*1.5), 2, ".", " ").PHP_EOL;
}
?>