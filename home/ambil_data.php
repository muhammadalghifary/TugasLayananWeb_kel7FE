<?php
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "ID_user: " . $row["ID_user"]. " - Username: " . $row["Username"]. " - Password: " . $row["Password"]. "<br>";
        // Ganti "field1" dan "field2" dengan nama kolom sesuai tabel Anda
    }
} else {
    echo "0 hasil";
}
$conn->close();
?>
