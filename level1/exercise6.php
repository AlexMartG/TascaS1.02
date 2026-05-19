<?php

function isBitten(): bool {
    return rand(0, 1) == 1;
}

echo isBitten() ? "Charlie bit my finger!" : "Charlie did not bite my finger!";

?>