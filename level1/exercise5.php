<?php

function checkGrade($score) {

    if ($score >= 60) {
        return "First Division";
    } 
    if ($score >= 45) {
        return "Second Division";
    }
    if ($score >= 33) {
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