<?php
declare(strict_types=1);


require_once __DIR__ . "/../vendor/autoload.php";

function sum(int|float ...$numbers) : int|float {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
        
 
   }
   return $sum;
}

echo sum(1, 10,55,88) . "\n";