<?php
$n = intval(readline());
   for ($z=0;  $n>$z; $z++){
        $p=readline();
        $T= str_split($p);
        $x=1;
        for($i=0; strlen($p)>$i; $i++){
            
            if($T[$i] == "a" ||$T[$i] == "A" ||$T[$i] == "4" ||$T[$i] == "e" ||$T[$i] == "E" ||$T[$i] == "3" ||$T[$i] == "i" ||$T[$i] == "I" ||$T[$i] == "1" ||$T[$i] == "o" ||$T[$i] == "O" ||$T[$i] == "0" ||$T[$i] == "s" ||$T[$i] == "S" || $T[$i] == "5"){
                $x*=3;
            }
            else{
                $x*=2;
            }
        }
        echo $x.PHP_EOL;
}