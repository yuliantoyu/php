<?php
function processValues($values, $callback) {
    $result = [];
    foreach ($values as $value) {
        $result[] = $callback($value);
    }
    return $result;
}

$numbers = [1, 2, 3];
$squareValues = processValues($numbers,    function ($x) {return $x * $x;}      );

echo '<pre>';
print_r($squareValues); // Outputs: Array ( [0] => 1 [1] => 4 [2] => 9 )
echo '</pre>';
?>

