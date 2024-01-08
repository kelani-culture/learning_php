<?php
// $b = false;

// $b ? print "TRUE" : print "FALSE";

declare(strict_types=1);
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

#echo $a1 . " " . $a2 . " " . $a3 . "\n";
fix_names();
#echo $a1 . " " . $a2 . " " . $a3;

// function fix_names() {
//     global $a1, $a2, $a3;
//     $a1 =  ucfirst(strtolower($a1));
//     $a2 = ucfirst(strtolower($a2));
//     $a3 = ucfirst(strtolower($a3));
// }

// if (function_exists("array_combine")) {
//     echo "Function exists";
// }  else {
//     echo "Function does not exists - better write your own";
// }

//  funciton having a return type
// the ? alows you to  return a null value if expected
// the | alloows you to tie different data type you are expecting as a return value

// and the mixed keyword return any dataa type

echo fix_names();
function fix_names() : string|int {
    return 1;
}
