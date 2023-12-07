<?php
// Declare and initialize variables
$name = "John";
$age = 25;

// Concatenate strings
$greeting = "Hello, " . $name . "!";

// Echo output
echo $greeting . " You are " . $age . " years old.";

// Basic conditional statement
if ($age >= 18) {
    echo " You are an adult.";
} else {
    echo " You are a minor.";
}

// Switch statement
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "It's the start of the week.";
        break;
    case "Friday":
        echo "It's almost the weekend!";
        break;
    default:
        echo "It's a regular day.";
}

?>
