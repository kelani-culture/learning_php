<?php
// variable scope

// local scope variable

function foo() {
    $x = 12;
#    echo $x . "\n";
}

foo();

// global scope

$x  = 10;

function glbal() {
    global $x;
#    echo $x;
}

echo glbal() . "\n";

// super global

function super() {
    $GLOBALS['x'] = 5;
}
super();
#echo $x;

// understanding static values
// static variable does not get destroyed and retain it values

function getValue() {
    static $value = null;

    if ($value === null)
        $value = someVeryExpensiveFunction();

    elseif ($value !== null)
        $value = "Not null anymore";
    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);
    echo "processing  ";
    return 10;
}

echo getValue() . "\n";
echo getValue() . "\n";
echo getValue() . "\n";
echo getValue() . "\n";