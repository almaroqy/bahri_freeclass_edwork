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
    <title>Data Buku</title>
</head>

<body>

    <?php
    include_once("connect.php");
    $books = mysqli_query($mysqli, "SELECT buku.*, katalog.nama as nama_katalog, penerbit.nama_penerbit as nama_penerbit, pengarang.nama_pengarang as nama_pengarang FROM buku
                                    LEFT JOIN katalog ON katalog.id_katalog = buku.id_katalog
                                    LEFT JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                    LEFT JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                    ");
    ?>

    <div class="container">
        <div class="row text-center" style="margin: 50px;">
            <div class="col-md-3">
                <h4><a href="" style="text-decoration:none;">BUKU</a></h4>
            </div>
            <div class="col-md-3">
                <h4><a href="" style="text-decoration:none;">KATALOG</a></h4>
            </div>
            <div class="col-md-3">
                <h4><a href="" style="text-decoration:none;">PENERBIT</a></h4>
            </div>
            <div class="col-md-3">
                <h4><a href="" style="text-decoration:none;">PENGARANG</a></h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <a class="btn btn-success" href="add.php">Add Book</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <td>ISBN</td>
                            <td>Judul Buku</td>
                            <td>Tahun Terbit</td>
                            <td>ID Penerbit</td>
                            <td>ID Pengarang</td>
                            <td>Katalog</td>
                            <td>STOK</td>
                            <td>Harga Pinjam</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($book = mysqli_fetch_array($books)) {
                            echo "
                                    <tr>
                                        <td>" . $book['isbn'] . "</td>
                                        <td>" . $book['judul'] . "</td>
                                        <td>" . $book['tahun'] . "</td>
                                        <td>" . $book['nama_penerbit'] . "</td>
                                        <td>" . $book['nama_pengarang'] . "</td>
                                        <td>" . $book['nama_katalog'] . "</td>
                                        <td>" . $book['qty_stok'] . "</td>
                                        <td>" . $book['harga_pinjam'] . "</td>
                                        <td>
                                            <a>Edit</a>
                                            <a>Delete</a>
                                        </td>
                                    </tr>
                                ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>