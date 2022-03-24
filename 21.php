<?php
    $n = 5;
    $flag = 0;
    for ($i=0; $i <= $n ; $i++) { 
        if($n%2==0) {
            $flag += 1; 
        }
    }
    if($flag > 2) {
        echo "Number is not prime!";
    } else {
        echo "Number is prime!";
    }
?>