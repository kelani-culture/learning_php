<?php
// $b = false;

// $b ? print "TRUE" : print "FALSE";

function longdates($timestamp)
{
    return date("l F js Y", $timestamp);
}


// variable scope
// variables in php by default are local scope which means that
// non functional variable cannot be accessed inside of a function
// except specified

$temp = "The date is ";
#echo $temp . longdate(time());

function longdate($timestamp) {
    return (string) date("l F js Y", $timestamp);
}

// annother way is to pass the variable as a second argument

#echo newdate($temp, time());
 
// function newdate($temp, $timestamp) {
//     return $temp . date("l F js Y", $timestamp);
// }

// // global variable can be created using the keywod global

// function test() {
//     static $count = 0;
//     echo $count;
//     $count++;
// } 

// echo strrev(" .dlrow olleH");
// echo str_repeat("Hip ", 2);
// echo strtoupper("hooray!");

// $lowered = ucfirst(strtolower("aNY # of Letters and PuncTuation you Waant"));
// echo $lowered;

$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatEs";

echo $a1 . " " . $a2 . " " . $a3 . "\n";
fix_names();
echo $a1 . " " . $a2 . " " . $a3;

function fix_names() {
    global $a1, $a2, $a3;
    $a1 =  ucfirst(strtolower($a1));
    $a2 = ucfirst(strtolower($a2));
    $a3 = ucfirst(strtolower($a3));
}