<?php

$veg = [["Kol", "sayur"], ["Apel", "buah"], ["Jeruk", "buah"], ["Mangga", "buah"], ["Brokoli", "sayur"]];

$t = [];

foreach ($veg as $v) {
    $t[$v[1]][] = $v[0];
}

echo json_encode(array_reverse($t));