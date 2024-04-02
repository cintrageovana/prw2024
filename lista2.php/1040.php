<?php
    list($N1, $N2, $N3, $N4) = explode(' ', readline());
    $M = ($N1*0.2 + $N2*0.3 + $N3*0.4 + $N4*0.1);
    $M = intval($M * 10) / 10;
    echo "Media: ".number_format($M,1,".","")."\n";
    if ($M>=7.0){
        echo "Aluno aprovado.\n";
    }
    else
    {
        if ($M<5.0)
        {
            echo "Aluno reprovado.\n";
        }
        else
        {   
            $nota = floatval(readline());
            echo "Aluno em exame.\n";
            $med = ($M+$nota)/2;
            echo "Nota do exame: ".number_format($nota,1,".","")."\n";
            if ($med>=5.0)
            {
                echo "Aluno aprovado.\n";
                echo "Media final: ".number_format($med,1,".","")."\n";
            }
            else
            {
                echo "Aluno reprovado.\n";
                echo "Media final: ".number_format($med,1,".","")."\n";
            }
        }
    }
?>