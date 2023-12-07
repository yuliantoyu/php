<?php
// While loop
$counter = 0;
while ($counter < 5) {
    echo "Count: " . $counter . "<br>";
    $counter++;
}

// For loop
for ($i = 0; $i < 5; $i++) {
    echo "Index: " . $i . "<br>";
}

// Foreach loop with an array
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo $color . "<br>";
}

?>
