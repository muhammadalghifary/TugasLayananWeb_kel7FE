<?php
require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    session_start();
    $_SESSION['ID_user'] = $row['ID_user'];
    $_SESSION['Status'] = $row['Status'];
    if ($row['Status'] == 'admin') {
        header("Location: admin/index.php");
    } else if ($row['Status'] == 'User') {
        header("Location: ../menu/index-menu.php");
    }
    
} else {

    echo "<script>
        alert('Username dan Password Salah!');
        document.location = 'index.php';
        </script>";
}
?>