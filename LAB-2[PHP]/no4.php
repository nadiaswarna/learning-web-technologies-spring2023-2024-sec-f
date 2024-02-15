<?php

    $a = 80;
    $b = 30;
    $c = 500;

    $largest = $a;

    if ($b > $largest) {
        $largest = $b;
    }
    if ($c > $largest) {
        $largest = $c;
    }

    echo "Largest number {$a}, {$b}, {$c} is {$largest}";
?>