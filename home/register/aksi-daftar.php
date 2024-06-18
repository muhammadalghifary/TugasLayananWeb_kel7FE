<?php
require '../koneksi.php';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$Status = $_POST["Status"];

$sql = "INSERT INTO user (Username, email, Password, Status) VALUES ('$username', '$email', '$password', '$Status')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../Login/login.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}

?>