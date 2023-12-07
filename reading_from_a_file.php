<?php

// File path
$filePath = 'example.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the file content
    $content = file_get_contents($filePath);

    // Output the content
    echo "File Content:\n";
    echo $content;
} else {
    echo "File not found.";
}

?>
