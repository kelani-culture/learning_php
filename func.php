<?php
// $b = false;

// $b ? print "TRUE" : print "FALSE";

function longdates($timestamp)
{
    return date("l F js Y", $timestamp);
}


// global variable scope
// variables in php by default are local scope which means that
// non functional variable cannot be accessed inside of a function
// except specified

$temp = "The date is ";
echo $temp . longdate(time());

function longdate($timestamp) {
    return (string) date("l F js Y", $timestamp);
}