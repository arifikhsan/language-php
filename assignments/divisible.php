<?php

$numbers = [1, 2, 3, 4, 5, 6];

// search number that divisible by 3
foreach ($numbers as $number) {
    if ($number % 3 == 0) {
        echo $number;
        echo "\n";
    }
}
