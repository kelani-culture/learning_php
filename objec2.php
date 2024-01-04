<?php
// creating a class construct
// and understanding static method

$object = new User("name1", "name2");
#$object::pwd_string();
class User {
    public $nme, $password;
    function __construct($param1, $param2) {
        $username = "Guest";
    }

    function __destruct() {
        // destruct code goes here
        echo "This is a destruct code";
    }
    function get_password() {
        return $this->password;
    }
    static function pwd_string() {
        echo "Please enter your password" . "\n";
    }
}

$object  = new User("Guest1", "GUest2");

$object->password = "secret";
echo $object->get_password() . "\n";