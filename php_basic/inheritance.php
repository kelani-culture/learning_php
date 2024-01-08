<?php
// understanding inheritance in php

$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@123.com";
#$object->display();

class User {
    public $name, $password;

    function save_user() {
        echo "save user code goes here";
    }
}

class Subscriber extends User {
    public $phone, $email;
    
    function display() {
        echo "Name: " . $this->name . "\n";
        echo "Pass: ". $this->phone ."\n";
        echo "Phone: " . $this->phone . "\n";
        echo "Email: " . $this->email ;
    }
}

// parent operator in php

$object = new Son;
#$object->test();
#$object->test2();

class Dad {
    function test() {
        echo "[Class Dad] I aam your Father\n";
    }
}

class Son extends Dad {
    function test() {
        echo "[Class Son] I am Darasimi\n";
    }
    function test2() {
        parent::test();
    }
}

// subclass constructor

$object = new Tiger();

// echo "Tigers have \n";
// echo "Fur:" . $object->fur . "\n";
// echo "Stripes: $object->stripes";


class Wildcat {
    public $fur;
    function __construct() {
        $this->fur = "True";
    }
}

class Tiger extends Wildcat {
    public $stripes; // tigers have strieps

    function __construct() {
        parent::__construct(); // call parent constructor first
        $this->stripes = "TRUE";
    }
}


// final keyword 
class Users {
    final function copyright() {
        echo "This class was writteb by Hoe smith";
    }
}

class Single_person extends Users {
    function copyright() {

        echo "lets see if you can override this"; // will throw ana error cannot override  method
    }
}

$user = new Single_person;
$user->copyright();