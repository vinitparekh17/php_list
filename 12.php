<?php
    function checkNums($a) {
    if($a%7==0) {
        echo "Divisible by 7";
    } else if($a%13==0) {
        echo "Divisible by 13";
    } else {
        echo "Not Divisible by 13 or 7";
    }
}
checkNums(21);
?>