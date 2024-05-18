<?php

// input: 5

$i = intval(readline());

for ($a = 1; $a <= $i; $a++) {
    for ($b = 1; $b <= $i; $b++) {
        $c = $i - $a - $b;
        if ($c > 0) {
            echo sprintf("%d %d %d \n", $a, $b, $c);
        }
    }
}
