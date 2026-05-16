<?php

function isBitten() {

    $randomNumber = rand(0, 1);

    if ($randomNumber == 1) {
        return true;
    } else {
        return false;
    }

}

if (isBitten()) {
    echo "Charlie bit my finger!";
} else {
    echo "Charlie did not bite my finger!";
}

?>