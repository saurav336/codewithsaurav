<?php
declare(strict_types=1);


require_once __DIR__ . "/../vendor/autoload.php";

function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

$x = 'sum';

echo $x(1, 2, 3); // Outputs: 6