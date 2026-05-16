<?php

function countNumbers($limit = 10, $step = 1) {

    for ($i = 0; $i <= $limit; $i += $step) {
        echo $i . "<br>";
    }

}

countNumbers();

echo "<hr>";
countNumbers(20, 2);

?>