<?php

// File path
$filePath = 'example.txt';

// Data to write
$dataToWrite = "This is a line of text.";

// Open the file for writing (create if not exists)
$handle = fopen($filePath, 'w');

if ($handle) {
    // Write data to the file
    fwrite($handle, $dataToWrite);

    // Close the file handle
    fclose($handle);

    echo "Data written to the file successfully.";
} else {
    echo "Unable to open the file for writing.";
}

?>
