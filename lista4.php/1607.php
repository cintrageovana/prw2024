<?php
$T = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $T; $i++) {
    $strings = explode(" ", trim(fgets(STDIN)));
    $str1 = $strings[0];
    $str2 = $strings[1];
    $n = strlen($str1);
    $min_ops = 0;
        for ($j = 0; $j < $n; $j++) {
        $diff = ord($str2[$j]) - ord($str1[$j]);
        if ($diff < 0) {
            $diff += 26; 
        }
        $min_ops += $diff;
    }
    
    echo $min_ops . PHP_EOL;
}
?>