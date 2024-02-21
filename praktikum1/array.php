<?php
// array indexing
$mhs1 = ['011', 'Layla', 'Sistem Informasi', [3.5, 3.7, 4.0]];
// panggil array
echo 'nama: ' . $mhs1[1] . '<br>'; // konkatenasi string
echo "nim: $mhs1[0] <br>"; // string interpolation
echo "IPS semester 1: " . $mhs1[3][0];