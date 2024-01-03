<?php
// understanding oop in php

$object = new User;
print_r($object); echo "\n";

$object->name = "Joe";
$object->password = "mypass";
$object->save_user(); echo "\n";
print_r($object); echo "\n";

class User {
    public $name, $password;

    function save_user() {
        echo "Save User code goes here";
    }
}