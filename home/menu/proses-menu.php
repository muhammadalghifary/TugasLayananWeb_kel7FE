<?php
include "../koneksi.php";

if (isset($_POST['bsimpan'])) {
    $nama_customer = $_POST['nama_customer'];
    $email = $_POST['email'];
    $noTelp = $_POST['noTelp'];
    $alamat = $_POST['alamat'];
    $jumlah_pembelian = $_POST['jumlah_pembelian'];
    $catatan = $_POST['catatan'];

    $simpan = mysqli_query($conn, "INSERT INTO customer (nama_customer, email, noTelp, alamat, jumlah_pembelian, catatan) VALUES ('$nama_customer', '$email', '$noTelp','$alamat','$jumlah_pembelian', '$catatan')");

    if ($simpan) {

        echo "<script>
        alert('Simpan data Berhasil!');
        document.location = '../detail_menu/index-detail.php';
        </script>";

    } else {
        echo "<script>
        alert('Simpan data Gagal!');
        document.location = '../menu/index-menu.php';
        </script>";
    }

}

?>