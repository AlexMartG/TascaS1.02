<?php

function checkGrade($score) {

    if ($score >= 60) {
        return "First Division";
    } elseif ($score >= 45 && $score <= 59) {
        return "Second Division";
    } elseif ($score >= 33 && $score <= 44) {
        return "Third Division";
    } else {
        return "Fail";
    }

}

echo checkGrade(61);
echo "<br>";

echo checkGrade(46);
echo "<br>";

echo checkGrade(33);
echo "<br>";

echo checkGrade(18);

?>