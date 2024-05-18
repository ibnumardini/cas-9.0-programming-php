<?php

// input: MiawmiawmiawMiawmiawMiaw

$i = str_split(readline());

$hi = 0;

foreach ($i as $v) {
    if ($v == "M") {
        $hi++;
    }
}

echo sprintf("Miaw %dx", $hi);
