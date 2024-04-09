<?php
 $N = readline();
 for($i=0; $i<$N; $i++){
     $p = readline();
     $n = intval(readline());
     for($c=0; $c<strlen($p); $c++){
         if((ord($p[$c]) - $n)>=65){
        $p[$c] = chr(ord($p[$c]) - $n);
     }
        else{
             $p[$c] = chr(ord($p[$c]) - $n+26);
        }
     }
     echo $p."\n";
 }
?>