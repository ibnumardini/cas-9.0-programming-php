<?php

$c = ['Merah', 'Hijau', 'Biru', 'Kuning', 'Hitam', 'Putih'];

$t = 'Kuning';

foreach ($c as $v) {
    if ($v === $t) {
        echo 'Warna Kuning';
        break;
    }

    echo sprintf("%s Bukan Warna %s\n", $v, $t);
}
