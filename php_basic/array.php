<?php
// array chunnk function can be use to split an array based on the number of argument
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$item1 = ['a', 'b', 'c', 'd', 'e'];
$item2 = [6, 7, 8, 9, 10];
#print_r(array_chunk($items, 3, true));

// the array comnine create an associative array of key and value
#print_r(array_combine($item1, $item2));

// array filter iterate throuhgh each value takes a third parameter to filter by key
// array filter by default remove falsify values
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr_filter = array_filter($array, fn($number, $key) => $number %2 == 0, ARRAY_FILTER_USE_BOTH);
$arr_filter = array_values($arr_filter);
#print_r($arr_filter);

// array_keys function return the keys of the given array
// takes a third boolean argument that decide if the search is loose comparison or not
$keys = array_keys($items);
//print_r($keys);

// array_map
$array = array_map(fn($number) => $number * 3, $array);
#print_r($array);
// array_merge
$arr1 = [1, 2, 3];
$arr2 = [3, 4, 1, 5];
$merge = array_merge($arr1, $arr2);
#print_r($merge);

// array_ reduce
$invoiceItems = [
    ['price' => 9.99, 'qty'=> 4, 'desc' => 'item 1'],
    ['price' => 5.0, 'qty' => 3, 'desc' => 'item 1'],
    ['price' => 4.9, 'qty' => 2, 'desc' => 'item 1'],
    ['price' => 1.9, 'qty' => 6, 'desc' =>'item 1'],
    ['price' => 4.2, 'qty' => 3, 'desc' => 'item 1'],
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);
#print_r($total);
// searching through an array
$array = ['a', 'b', 'c', 'd',   'e', 'f', 'g'];
$key = array_search('a', $array);

if (in_array('z', $array)) {
    echo "letter found\n";
} else {
    echo "letter not found\n";
}

// array_diff checks if there is a difference between the first arraay and all other arrays
$array1 = ['a' => 1, 'b' => 2, 'c' => 3,'d' => 4, 'e' => 5];
$array2 = ['f' => 4, 'g' => 5, 'h' => 6, 'i' => 7, 'j' => 8];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

#print_r(array_diff($array1, $array2, $array3));
echo "\n";
// array_diff_assocaitive checks for the key
#print_r(array_diff_assoc($array1, $array2, $array3));
// array_diff_key chhecks difference in array_keys
// sorting
$array = ['c' => 3, 'b' => 2, 'd' => 4, 'a' => 1, 'e' => 5];
#print_r($array);
##echo "\n";
asort($array);
//print_r($array);
#echo "\n";
// sort an array by key
ksort($array);
// uusort sort an array uising callable function
usort($array, fn($a, $b) => $a <=> $b);
//print_r($array);


// array destructure
$array = [1, 2, 3, [4, 5]];
[$a, $b, $c, [$d, $e]] = $array;
echo "$a $b, $c, $d, $e";
