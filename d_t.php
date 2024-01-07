<?php
// tiime function
echo time() . "\n";
echo time() + 7  *24*60*60 ."\n";

// mktime function use for creating timestamp
$timestamp = mktime(20, 14, 0, 1, 7, 2024);
$format = 'l-F-jS-Y-z-h:ia';
#echo date($format, $timestamp);

// Date Constants
echo date(DATE_ATOM)."\n";
echo date(DATE_COOKIE)."\n";

// Using checkdate
$month = 2;
$day = 31;
$year = 2018;

if (checkdate($month, $day, $year)) {
    echo "Date is valid";
} else echo "Date is invalid";