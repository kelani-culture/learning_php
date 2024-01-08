<?php
// learning ithe match expression

$payment = 0;

$paid = match($payment) {
    1 => "well paid",
    2 => "good paid",
    3 => "chill paid",
    default => "not paid",
};

echo $paid;