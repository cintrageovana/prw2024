<?php
$V= fgets(STDIN);

if ($V>=0 && $V<=25){
    echo "Intervalo [0,25]\n";
}
elseif ($V>25 && $V<=50){
    echo "Intervalo (25,50]\n";
}
elseif ($V>50 && $V<=75){
    echo "Intervalo (50,75]\n";
}
elseif ($V>75 && $V<=100){
    echo "Intervalo (75,100]\n";
}
else{
    echo"Fora de intervalo\n";
}
?>