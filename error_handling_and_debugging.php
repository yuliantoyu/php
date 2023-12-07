<?php

// Set error reporting to report all errors except notices
error_reporting(E_ALL & ~E_NOTICE);

// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    error_log("Error: [$errno] $errstr in $errfile on line $errline");
    
    // You can customize the error message for the user or redirect to an error page
    echo "An error occurred. Please try again later.";
    
    // Prevent the default PHP error handler from executing
    return true;
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Example of triggering an error
$undefinedVar = $nonexistentArray['key'];

// Example of exception handling
try {
    // Code that may throw an exception
    $result = 10 / 0;
} catch (Exception $e) {
    error_log("Exception: " . $e->getMessage());
    echo "An exception occurred. Please try again later.";
}

// Use var_dump and print_r for debugging
$debugArray = ['apple', 'banana', 'cherry'];
var_dump($debugArray);

// Debugging with xdebug (uncomment the following lines if xdebug is installed)
/*
xdebug_enable();
var_dump(xdebug_get_declared_vars());
*/

?>
