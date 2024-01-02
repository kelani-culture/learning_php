<?php
// understanding parameters
declare(strict_types= 1);

// the union allows you to pipe multiple expected datatypes together
 function foo(int|float $x, int|float $y = 0) {
    return $x + $y;
 }

#echo foo(10, 5.0);

// variadic function accepts variadic number of arguments
// the splat ...operators allows us to take in multiple argument
/// the splat operator also aloows you to unpack an array
function sum(int|float...$numbers): int|float {
    return array_sum($numbers);
}

$arr = [1, 2, 3, 4, 5, 6];
#echo sum(...$arr);

// naming argument
function divide(int $x, int $y): int {
    if ($x % $y === 0) {
        return $x / $y;
    } 
    return $x;
}
$x = 6;
$y = 3;

echo divide(y: $y, x: $x);