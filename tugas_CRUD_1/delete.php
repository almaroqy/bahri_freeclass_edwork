<?php
include("connect.php");

$isbn = $_GET['isbn'];
$delete = mysqli_query($mysqli, "DELETE FROM buku WHERE isbn = '$isbn'");

echo "<script>window.location.href='index.php'</script>";
// Tidak memakai header("Location: index.php") karena dia akan mengalami error "Warning: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\bahri_freeclass_edwork\tugas_CRUD_1\add.php:74) in C:\xampp\htdocs\bahri_freeclass_edwork\tugas_CRUD_1\add.php on line 127" dan akan stak di halaman add.php(bukan pindah ke index.php), namun data tetap masuk ke database dan bisa diload di index.php
