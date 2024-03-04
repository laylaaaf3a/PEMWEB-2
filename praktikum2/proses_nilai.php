<?php

// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];


// hitung nilai total (30% uts + 35% uas + 35% tugas)
$nilai_total = (30 / 100 * $uts) + (35 / 100 * $uas) + (35 / 100 * $tugas);

if ($nilai_total > 55) {
    $status = 'Lulus';
} else {
    $status = 'Tidak Lulus';
}

if($nilai_total >= 0 && $nilai_total <= 35) {
    $grade = "E";
    $predikat = "Sangat Kurang";
} else if($nilai_total >= 36 && $nilai_total <=55) {
    $grade = "D";
    $predikat = "Kurang";
} else if($nilai_total >= 56 && $nilai_total <= 69) {
    $grade = "C";
    $predikat = "Cukup";
} else if($nilai_total >= 70 && $nilai_total <=84) {
    $grade = "B";
    $predikat = "Memuaskan";
} else if($nilai_total >= 85 && $nilai_total <=100) {
    $grade = "A";
    $predikat = "Sangat Memuaskan";
} else {
    $grade = "I";
    $predikat = "";
}

// tampilkan hasil form
echo "Nama Lengkap: $nama";
echo "<br> Mata kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Nilai Total: $nilai_total";
echo "<br> Status: $status";
echo "<br> Grade: $grade";
echo "<br> Predikat: $predikat";