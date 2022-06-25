<?php

$names = ["Arif", "Ikhsan", "Udin"];
// echo $names; // error

echo $names[0];
echo "\n";

foreach ($names as $name) {
    echo "Hello, my name is $name\n";
}

print_r($names);
var_dump($names);
