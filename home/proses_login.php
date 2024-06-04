<?php
// Lakukan koneksi ke database
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "db_coffeeshop"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data yang dikirimkan dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query SQL untuk memeriksa kredensial login
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Jika kredensial cocok, redirect ke halaman dashboard atau halaman selanjutnya
    header('Location: dashboard.php');
} else {
    // Jika kredensial tidak cocok, arahkan kembali ke halaman login dengan pesan error
    header('Location: login.html?login_error=1');
}

$conn->close();
?>
