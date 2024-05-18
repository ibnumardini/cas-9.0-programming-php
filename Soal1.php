<?php

$c = [500, 100, 500, 1000, 100, 1000, 500];

$t = [100 => ['Seratus', 0], 500 => ['Limaratus', 0], 1000 => ['Seribu', 0]];

foreach ($c as $v) {
    $t[$v][1]++;
}

foreach ($t as $v) {
    printf("%s %d Coin\n", $v[0], $v[1]);
}   