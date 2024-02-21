<?php
// membuat array asosiatif (terdiri atas key & value)
$mhs = [
    'nama' => 'Layla', 
    'NIM' => '011', 
    'Prodi' => 'Sistem Informasi',
    'IPS' => [
        1 => 3.40,
        2 => 3.70,
        3 => 4.0
    ],
];

// panggil array asosiatif
echo "Nama: " . $mhs['nama'];
echo "<br> IPS semester 1: " . $mhs['IPS']['1'];
echo "<br> IPS semester 2: " . $mhs['IPS']['2'];
echo "<br> IPS semester 3: " . $mhs['IPS']['3'];