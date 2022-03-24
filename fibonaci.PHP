<?php
    $range = 10;
    $n1 = 0;
    $n2 = 1;

    echo " $n1, $n2";
    for ($i=0; $i <= $range; $i++) { 
        $n3 = $n1 + $n2;
        $i++;
        $n1 = $n2;
        $n2 = $n3;

        echo ", $n3";
    }
?>