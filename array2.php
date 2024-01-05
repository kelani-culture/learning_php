<?php
// learning arraays in php
declare(strict_types= 1);

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

function print_array(array $paper) {
    $count = 0;
    foreach ($paper as $key => $value) {

        if ($count === 0) {
            print "[";
        }

        if ($count !== count($paper) -1)
            echo "(".$key .")"." => ". $value .", ";

        else
            echo "(".$key .")" ." => ". $value;
        if ($count === count($paper) - 1) {
            print "]";
        }
        ++$count;
    }
}

// associative array
$pap['copier'] = 'Copier & Multipurpose';
$pap['inkjet'] = 'Inkjet Printer';
$pap['laser'] = 'Laser Printer';
$pap['photo'] = 'Photographic paper';

#print_array($pap);

// using array method for the array
$p1 = array('copier', 'Inkjet', 'Laser', 'Photo');
#print_array($p1);

// using the list function
list($a, $b) = array('Alice', 'Bob');
echo "a=$a b=$b";