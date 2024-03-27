<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'] ?? [];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Boostrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];

$skor_skill = 0;
foreach ($skills as $value) {
    $skor_skill += $nilai_skills[$value];
}

if ($skor_skill <=  0) {
    $kategori_skill = 'Tidak Memadai';
} elseif ($skor_skill >= 0 && $skor_skill <= 40) {
    $kategori_skill = 'Kurang';
} elseif ($skor_skill >= 40 && $skor_skill <= 60) {
    $kategori_skill = 'Cukup';
} elseif ($skor_skill >= 60 && $skor_skill <= 100) {
    $kategori_skill = 'Baik';
} elseif ($skor_skill >= 100 && $skor_skill <= 150) {
    $kategori_skill = 'Sangat Baik';
} else {
    $kategori_skill = 'Tidak Ada Nilai';
}

echo "NIM: $nim";
echo "<br> Nama Lengkap: $nama";
echo "<br> Jenis Kelamin: $jk";
echo "<br> Program Studi: $prodi";
echo "<br> Skill: " . join(', ', $skills);
echo "<br> Tempat Domisili: $domisili";
echo "<br> Email: $email";
echo "<br> Skor Skill: $skor_skill";
echo "<br> Kategori Skill: $kategori_skill";