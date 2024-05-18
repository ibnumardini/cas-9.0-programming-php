<?php

// input 9 FISKOM LOMBA PROGRAMMING

$i = readline();
$i = str_split($i);

$iter = ceil(count($i) / 4);

$arr = [];
$g = -1;
foreach ($i as $k => $v) {
    if ($k % $iter === 0) {
        $g++;
    }

    $arr[$g][] = $v;
}

$arr1 = [];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $arr1[$j][] = $arr[$i][$j];
    }
}

$chipper = "";
foreach ($arr1 as $k => $v) {
    $chipper .= implode("", $v);
}

echo $chipper;
