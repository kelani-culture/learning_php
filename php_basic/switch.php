<?php
# learning about the switch statement in php
$page = "Hom";
switch ($page) {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You seleted About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
    case "Links":
        echo "You selected Links";
        break;
    default:
        echo "Unrecongnized selection";
        break;
}
echo "\n";
$menu = "lasagna";
switch ($menu):
    case "lasagna":
        echo "lasagna is served";
        break;
    
    case "pie":
        echo "pie is served";
        break;
    case "sandwich":
        echo "samdswich is served";
        break;
    default:
        echo "Not found in the menu";
        break;
endswitch;