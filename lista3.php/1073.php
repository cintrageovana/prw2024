<?php
$num=intval(readline());
for($x=1; $x<=$num;$x++){
    if($x%2 == 0){
        echo "$x^2 = ". $x*$x."\n";    }
}
?>