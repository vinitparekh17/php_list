<?php
    function maxi($a, $b, $c) {
        if($a>$b && $a>$c)
        {
            return "A is max";
        } else if($b>$a && $b>$c) {
            return "B is max";
        } else {
            return "C is max";
        }
    }

    echo maxi(20, 30, 50);
?>