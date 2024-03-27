<?php
$email = $_POST ['email'];
$password = $_POST ['password'];

if ($email == 'admin@gmail.com' && $password == 'ELPGANTENG') {
    header('Location: dashboard.php');
} else {
    echo "Login Gagal";
}