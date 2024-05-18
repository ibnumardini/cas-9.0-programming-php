<?php

// input: 5, 5, 2

$i = explode(",", readline());

$a = intval($i[0]);
$b = intval($i[1]);
$c = intval($i[2]);

$mul = 0;
for ($j = 0; $j < $b; $j++) {
    $mul += $a;
}

$div = 1;
$tmp = $mul;
for ($k = 0; $k < $mul; $k++) {
    $tmp = $tmp - $c;
    if ($tmp < $c) break;
    $div++;
}

echo $div;
