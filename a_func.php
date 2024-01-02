<?php
// understanding variable function anonymous function 
// and arrow functions
declare(strict_types=1);


function sum(int|float ...$numbers): int|float {
    return array_sum($numbers);
}

// $x = 'sum';
// if (is_callable($x)) {
//     echo $x(1, 2, 3, 4, 5, 6);
// } else {
//     echo "Not callable";
// }

// anonymous function also known as lambda funcion that do not have a name
// closures
// callable is a datatype that allows us to pass a function as an argument
// while for an anonymous function closures are used 
$x = 1;
$sum = function (callable $callable, int|float ...$numbers) use($x): int {
    $x = 15;
    return $callable(array_sum($numbers));
};

#echo $sum('foo',1, 2, 3, 4);
// callback function 
$array = [1, 2, 3, 4,5, 6];
$by_2 = array_map('foo', $array);

function foo($elements) {
    return $elements * 2;
}

// arrow function
$array = [1, 2, 3, 4];

$y = 2;
$array2 = array_map(fn($number) => $number % ++$y, $array);
print_r($array2);
echo "\n" . $array2;