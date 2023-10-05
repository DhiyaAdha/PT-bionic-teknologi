<?php

function generatePattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= $i) {
                echo $j;
            } else {
                echo '*';
            }
        }
        echo "\n";
    }
}

// Contoh penggunaan dengan n = 5
generatePattern(5);

// Contoh penggunaan dengan n = 4
generatePattern(4);

?>