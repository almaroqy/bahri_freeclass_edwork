<?php
$servernamme = '127.0.0.1';
$database = 'perpus';
$username = 'root';
$password = '';

$conn = mysqli_connect($servernamme, $username, $password, $database);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
$sql = "SELECT id_anggota, nama from anggota WHERE NOT EXISTS(SELECT id_anggota, nama FROM peminjaman where anggota.id_anggota = peminjaman.id_anggota);";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Daftar : " . $row["id_anggota"] . "  " . $row["nama"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
