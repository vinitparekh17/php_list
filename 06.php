<?php

    $p = 14;
    $q = 24;

    echo "Before swapping P: $p Q: $q <br />";

    list($p, $q) = array($q, $p);

    echo "After swapping P: $p Q: $q";

?>