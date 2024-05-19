<?php

// $i = "9 FISKOM LOMBA PROGRAMMING";

$i = readline();
$i = str_split($i);

$slice = ceil(count($i) / 4);

$chunk = array_chunk($i, $slice);
$pad = array_map(fn($v) => array_pad($v, $slice, " "), $chunk);

$cipher = "";
for ($i = 0; $i < $slice; $i++) {
    foreach ($pad as $p) {
        $cipher .= $p[$i];
    }
}

echo $cipher;
