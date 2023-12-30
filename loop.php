<?php
$count = 1;

// while loop
while ($count <= 12) {
#    echo "$count time 12 is " . $count * 12 . "\n";
    $count++;
}

// do while loop
$count = 1;
do {
    #echo "$count times is 12 " . $count * 12 . "\n";
    $count++;
} while ($count <= 12);

// for loops
$count = 1;

for ($count = 1; $count <= 12; ++$count) {
 #   echo "$count times 12 is " . $count * 12 . "\n";
}

// understanding break statement
$fp = fopen("text.txt", "wb");
for ($j = 0; $j < 100; $j++) {
    $written = fwrite($fp, "$j: " . "data\n");

    if ($written === false) {
        // Handle the case where writing fails
        break;
    }
}
fclose($fp);

// learning the continue statement

$j = 10;

while ($j > -10) {
    $j--;

    if ($j == 0) continue;

    echo (10 / $j) . "\n";
}