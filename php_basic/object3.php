<?php
//  declaring properties



class Translate {
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;

    static function lookup() {
        echo self::SPANISH;
    }
}
#Translate::lookup();

$temp = new Test();

echo "Test A: " . Test::$static_property . "\n";
echo "Test B: " . $temp->get_sp() . "\n";
#echo "Test C: " . $temp->static_property . "\n"; // bug static properties can't be acccessed from object instance

class Test {
    static $static_property = "I'm static";

    function get_sp() {
        return self::$static_property;
    }
}