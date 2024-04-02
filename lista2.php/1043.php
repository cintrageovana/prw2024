<?php
list($a, $b, $c) = explode(' ', readline());
if ($a+$b>$c && $a+$c>$b && $c+$b>$a)
{
    $P = $a + $b + $c;
    echo "Perimetro = ".number_format($P,1,".","")."\n";
}
else
{
    $A =  ($a+$b)*$c/2;
    echo "Area = ".number_format($A,1,".","")."\n";
}
?>