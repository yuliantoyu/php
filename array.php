<?php

// Sample Indexed Array
$fruits = ['Apple', 'Banana', 'Orange', 'Grapes'];

// Sample Associative Array
$user = [
    'name' => 'John Doe',
    'age' => 25,
    'email' => 'john@example.com',
];

// Adding an element to the end of an indexed array
$fruits[] = 'Mango';

// Modifying an element in an indexed array
$fruits[1] = 'Cherry';

// Adding a key-value pair to an associative array
$user['location'] = 'New York';

// Modifying a value in an associative array
$user['age'] = 26;

echo '<pre>';

// Iterating through an indexed array using foreach
echo "Indexed Array:\n";
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// Iterating through an associative array using foreach
echo "\nAssociative Array:\n";
foreach ($user as $key => $value) {
    echo "$key: $value\n";
}

// Using array functions

// Count elements in an array
$fruitsCount = count($fruits);
echo "\nNumber of fruits: $fruitsCount\n";

// Check if an element exists in an array
$hasBanana = in_array('Banana', $fruits);
echo "\nHas Banana: " . ($hasBanana ? 'Yes' : 'No') . "\n";

// Find the position of an element in an array
$positionOrange = array_search('Orange', $fruits);
echo "\nPosition of Orange: $positionOrange\n";

// Extract values from an associative array
$userValues = array_values($user);
echo "\nUser Values:\n";
print_r($userValues);

// Extract keys from an associative array
$userKeys = array_keys($user);
echo "\nUser Keys:\n";
print_r($userKeys);

// Combine arrays
$combinedArray = array_merge($fruits, $userValues);
echo "\nCombined Array:\n";
print_r($combinedArray);

// Filter elements in an array
$filteredFruits = array_filter($fruits, function ($fruit) {
    return strlen($fruit) > 5;
});
echo "\nFiltered Fruits:\n";
print_r($filteredFruits);

// Map elements in an array
$uppercaseFruits = array_map('strtoupper', $fruits);
echo "\nUppercase Fruits:\n";
print_r($uppercaseFruits);

// Sort an indexed array
sort($fruits);
echo "\nSorted Fruits:\n";
print_r($fruits);

// Reverse an indexed array
$reversedFruits = array_reverse($fruits);
echo "\nReversed Fruits:\n";
print_r($reversedFruits);

?>
