<?php

$numbers = [1, 2, 3, 4, 5];

// search even number
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number;
        echo "\n";
    }
}
