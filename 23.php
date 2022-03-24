<?php
    $string = "tenets";
    $reversed = strrev($string);

    if($string == $reversed) {
        echo "Palidrom string!";
    } else {
        echo "Not Palidrom string";
    }
?>