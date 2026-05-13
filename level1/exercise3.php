<?php
echo "<h3>Section A</h3>";

$X = 10;
$Y = 5;

$N = 5.5;
$M = 2.2;

echo "X = " . $X . "<br>";
echo "Y = " . $Y . "<br>";

echo "X + Y = " . ($X + $Y) . "<br>";
echo "X - Y = " . ($X - $Y) . "<br>";
echo "X * Y = " . ($X * $Y) . "<br>";
echo "X / Y = " . ($X % $Y) . "<br>";

echo "N = " . $N . "<br>";
echo "M = " . $M . "<br>";

echo "N + M = " . ($N + $M) . "<br>";
echo "N - M = " . ($N - $M) . "<br>";
echo "N * M = " . ($N * $M) . "<br>";
echo "N / M = " . fmod($N, $M) . "<br>";

echo "Double of X = " . (2 * $X) . "<br>";
echo "Double of Y = " . (2 * $Y) . "<br>";
echo "Double of N = " . (2 * $N) . "<br>";
echo "Double of M = " . (2 * $M) . "<br>";   
echo "Sum of all variables = " . ($X + $Y + $N + $M) . "<br>";
echo "Product of all variables = " . ($X * $Y * $N * $M) . "<br>";

echo "<hr>";
echo "<h3>Section B</h3>";

function calculate($a, $b, $operation) {
    if(!is_numeric($a) || !is_numeric($b)) {
        return "Error: Both parameters must be numbers.";
    }

    switch($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            if($b == 0) {
                return "Error: Division by zero is not allowed.";
            }
            return $a / $b;
        default:
            return "Error: Invalid operation.";
    }
}
echo "Calculate 10 + 5: " . calculate(10, 5, 'add') . "<br>";
echo "Calculate 10 - 5: " . calculate(10, 5, 'subtract') . "<br>";
echo "Calculate 10 * 5: " . calculate(10, 5, 'multiply') . "<br>";
echo "Calculate 10 / 5: " . calculate(10, 5, 'divide') . "<br>";

echo calculate(10, 0, 'divide') . "<br>";
echo calculate(10, 'five', 'add') . "<br>";
echo calculate(10, 5, 'modulus') . "<br>";

echo "<hr>";
?>