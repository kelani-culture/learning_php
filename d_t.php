<?php
// undersstanding date and time in php

$currentTime = time();

echo $currentTime . "\n";

# shsow date in the next 5 days 
echo $currentTime +  5 * 60 *60*24 . "\n";


#shoow time in the last day 
echo $currentTime - 60*60*24 . "\n";

# show date
echo date('m/d/y g:ia', $currentTime - 60*60*24) . "\n";
echo date('m/d/y g:ia', $currentTime +  5 * 60 *60*24);