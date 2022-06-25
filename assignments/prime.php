<?php 

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// search prime number
foreach ($numbers as $number) {
    if (isPrime($number)) {
        echo $number;
        echo "\n";
    }
}

function isPrime($number) {
  if ($number == 1) {
      return false;
  }
  
  for ($i = 2; $i < $number; $i++) {
      if ($number % $i == 0) {
          return false;
      }
  }
  
  return true;
}
