<?php
list($a, $b, $c) = explode(' ', readline());
if ($a<$b && $a<$c && $b<$c){
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
    echo"\n";
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
}
elseif ($a<$b && $a<$c && $c<$b){
    echo"$a\n";
    echo"$c\n";
    echo"$b\n";
    echo"\n";
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
}
elseif ($b<$a && $b<$c && $a<$c){
    echo"$b\n";
    echo"$a\n";
    echo"$c\n";
    echo"\n";
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
}
elseif ($b<$a && $b<$c && $c<$a){
    echo"$b\n";
    echo"$c\n";
    echo"$a\n";
    echo"\n";
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
}
elseif ($c<$a && $c<$b && $b<$a){
    echo"$c\n";
    echo"$b\n";
    echo"$a\n";
    echo"\n";
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
}
elseif($c<$a && $c<$b && $a<$b)
{
    echo"$c\n";
    echo"$a\n";
    echo"$b\n";
    echo"\n";
    echo"$a\n";
    echo"$b\n";
    echo"$c\n";
}
?>