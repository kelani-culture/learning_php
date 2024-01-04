<?php
// understanding oop in php

class User {
    public $name;

    function save_user() {
        echo "Save User code goes here";
    }
}

$object1 = new User();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Any";

echo "object1 name = " . $object1->name ."\n";
echo "object2 name = " . $object2->name . "\n";