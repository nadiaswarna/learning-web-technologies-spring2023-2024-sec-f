<?php

    $nums = [1, 2, 8, 3, 9, 0, 7, 8];

    $x = 7;
    $y = -1;

    echo "Nums: \r\n" ;
    for ($i = 0; $i < count($nums); $i++) {
        echo "{$nums[$i]} ";
        if ($nums[$i] == $x) {
            $y = $i;
        }
    }

    if ($y == -1) {
        echo "{$x} is not found\r\n";
    } else {
        echo "{$x} found at index {$y}\r\n";
    }
?>