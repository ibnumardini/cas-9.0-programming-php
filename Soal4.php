<?php

// input: 9 FISKOM LOMBA PROGRAMMING

$i = readline();
$i = str_split($i);

$iter = ceil(count($i) / 4);

$group = [];
$g = -1;
foreach ($i as $k => $v) {
    if ($k % $iter === 0) {
        $g++;
    }

    $group[$g][] = $v;
}

$reverse = [];
for ($i = 0; $i < count($group); $i++) {
    if (count($group[$i]) < $iter) array_push($group[$i], str_repeat(" ", $iter - count($group[$i])));

    for ($j = 0; $j < count($group[$i]); $j++) {
        $reverse[$j][] = $group[$i][$j];
    }
}

$cipher = "";
foreach ($reverse as $k => $v) {
    $cipher .= implode("", $v);
}

echo $cipher;
