<?php

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

?>