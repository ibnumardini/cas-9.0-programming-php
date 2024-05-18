<?php

// input: MiawmiawmiawMiawmiawMiaw

$i = str_split(readline());

$lo = 0;

foreach ($i as $v) {
    if ($v == "M") {
        $hi++;
    }
}

echo sprintf("Miaw %dx", $hi);
