<?php

$age = 20;
$height = 1.75;
$city = "New York";
$smoker = true;

echo "Integer: " . $age . "<br>";
echo "Double: " . $height . "<br>";
echo "String: " . $city . "<br>";
echo "Boolean: " . ($smoker ? "Yes" : "No") . "<br>";

define("NAME", "Alex");

echo ucwords(NAME) . "<br>";

?>