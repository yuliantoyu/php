<?php
function calculateValues($a, $b) {
    $sum = $a + $b;
    $product = $a * $b;
    return [$sum, $product];
}

list($total, $result) = calculateValues(3, 4);
echo "Sum: $total, Product: $result";
// Outputs: Sum: 7, Product: 12
?>
