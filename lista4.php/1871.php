<?php
$O=0;
while($O==0){
    list($x, $y) = explode (' ', readline());
    if($x !=0 || $y!=0){
        $r = $x+$y;
        $x = $str = str_replace("0", "", $r);
        echo $x. "\n";
    }
    else{
        $O=1;
    }
}
?>