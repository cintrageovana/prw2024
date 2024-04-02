<?php
$n=intval(readline());
for($x=1; $x<10000;$x++){
    if($x%$n==2){
        echo $x."\n";
    }
}
?>