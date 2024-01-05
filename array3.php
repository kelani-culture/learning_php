<?php
// undersstanding multidimensional array

$product = [
    'paper' => [
        'copier' => 'Copier & Multipurpose',
        'inkjet' => 'Inkjet Printer',
        'laser' => 'Laser Printer',
        'photo' => 'Photographic Paper'
    ],

    'pens'  => [
        'ball' => 'Ball Point',
        'hillite' => 'Highlighters',
        'marker' => 'Markers'
    ],
    'misc' => [
        'tape' => "Sticky Tape",
        'glue' => 'Adhesives',
        'clips' => 'Paperclips'
    ],
];

// foreach($product as $section => $items) {
//     foreach($items as $key => $value)
//         echo "$section:\t$key\t($value)\n";
// }

// using array functions
$state = "I-am-a-boy";
$fred = [1, 2, 3, 4, 5, 6, 7];
$unsort = [3, 1, 4, 2, 5, 2, 10, 3, 5];
$unstr = ['a', 'c', 'b', 'f', 'e'];
echo (is_array($fred)) ? "Is an array" : "Is not an array";
echo "\n".count($fred). "\n";
# SORT_NUMERIC
# SORT_STRING
sort($unstr);
print_r($unstr);

// sort in reverse sort
rsort($unsort);
print_r($unsort);

// shuffle
shuffle($fred);
print_r($fred);

// explode
$temp = explode('-', $state);
print_r($temp);