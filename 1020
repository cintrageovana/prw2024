<?php
$i = intval(readline());
$d = array(0, 0, 0);

while ($i > 0) {
    switch(true) {
        case ($i < 30):
            $d[2] = $i;
            $i = 0;
            break;
        case ($i < 365):
            $d[1] = intval($i / 30);
            $i %= 30;
            break;
        default:
            $d[0] = intval($i / 365);
            $i %= 365;
    }
}

echo $d[0] . " ano(s)" . PHP_EOL;
echo $d[1] . " mes(es)" . PHP_EOL;
echo $d[2] . " dia(s)" . PHP_EOL;
?>