<?php
// understand the php print construct
rand(0, 1) ? print "Hello" : print "World";
print PHP_EOL;
print 'Hello ' and print 'goodbye ';
print PHP_EOL;
$rand = rand(0, 1);
print $rand or print 'whatever';
print PHP_EOL;
function test() {
    return !!rand(0, 1);
}
print test() or  print 'failed';