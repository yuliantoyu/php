<?php
// Function with parameters and return value
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

// Call the function
$result = addNumbers(5, 10);
echo "Sum: " . $result;

// Function with default parameter value
function greet($name = "Guest") {
    echo "Hello, " . $name . "!";
}

greet(); // Outputs: Hello, Guest!
greet("Alice"); // Outputs: Hello, Alice!
?>
