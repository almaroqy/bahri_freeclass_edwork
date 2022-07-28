<?php
if (isset($_POST['submit'])) {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $stok = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    $insert = mysqli_query($conn, "INSERT INTO buku(isbn, judul, tahun, id_penerbit, id_pengarang, qty_stok, harga_pinjam) VALUES('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$stok', '$harga_pinjam'); ");

    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Tambah Buku</title>
</head>
<?php
if (isset($_POST['submit'])) {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $stok = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    $insert = mysqli_query($conn, "INSERT INTO buku(isbn, judul, tahun, id_penerbit, id_pengarang, qty_stok, harga_pinjam) VALUES('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$stok', '$harga_pinjam'); ");

    header('location: index.php');
}
?>

<body>
    <?php
    include_once("../tugas_CRUD/connect.php");
    $array_penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
    $array_pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>TAMBAH BUKU</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <form action="add.php" method="POST" name="form1">
                    <table class="table table-bordered" width="100%" cellpedding="10" border=0>
                        <thead>
                            <tr>
                                <td>ISBN</td>
                                <td><input type="text" class="form-control" name="isbn" id="isbn"></td>
                            </tr>
                            <tr>
                                <td>Judul Buku</td>
                                <td><input type="text" class="form-control" name="judul" id="judul"></td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td><input type="number" class="form-control" name="tahun" id="tahun"></td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>
                                    <select name="id_penerbit" class="form-control">
                                        <?php
                                        foreach ($array_penerbit as $option_penb) {
                                        ?>
                                            <option value="<?= $option_penb['id_penerbit'] ?>"><?= $option_penb['nama_penerbit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pengarang</td>
                                <td>
                                    <select name="id_pengarang" class="form-control">
                                        <?php
                                        foreach ($array_pengarang as $option_peng) {
                                        ?>
                                            <option value="<?= $option_peng['id_pengarang'] ?>"><?= $option_peng['nama_pengarang'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>STOK</td>
                                <td><input type="text" class="form-control" name="qty_stok" id="qty_stok"></td>
                            </tr>
                            <tr>
                                <td>Harga Pinjam</td>
                                <td><input type="text" class="form-control" name="harga_pinjam" id="harga_pinjam"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="form-control btn btn-primary" type="submit" name="submit" id="submit" value="ADD"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>