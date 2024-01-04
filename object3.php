<?php
//  declaring properties

$object1 = new User();
$object1->name = "Alice";

echo "$object1->name";

class User {
    public $name = "Paul Smith"; // valid
    public $age = 42;// valid 
    #public $time = time(); // invalid;
    #public $score = $level * 2 // invalid
}