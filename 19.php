<?php

function sumdigit($n) {
    $sum = 0;
    while($n != 0) {
        $reminder = $n%10;
        $sum = $sum + $reminder;
        $n= $n/10;
    }
    return $sum;
}

echo sumdigit(34);
?>