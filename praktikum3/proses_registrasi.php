<?php
// tangkap input form registrasi

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Pyton' => 30,
    'Java' => 50,
];

$skor_skills = 0;
foreach ($skills as $value) {
    $skor_skills += $nilai_skills[$value];
}

// kategori skill
if ($skor_skills == 0) {
    $predikat = "Tidak Memadai";
} else if ($skor_skills >= 0 && $skor_skills <= 40) {
    $predikat = "Kurang";
} else if ($skor_skills >= 40 && $skor_skills <= 60) {
    $predikat = "Cukup";
} else if ($skor_skills >= 60 && $skor_skills <= 100) {
    $predikat = "Baik";
} else {
    $predikat = "Sangat Baik";
}

echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill:" .  join(',', $skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br> Skor: $skor_skills";
echo "<br> Predikat: $predikat";