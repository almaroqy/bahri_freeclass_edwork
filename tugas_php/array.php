<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Array</title>
</head>

<body>
    <nav style="background-color: #ecb514; width: 100%; height: 80px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 style="margin-top: 20px;">Daftar Nilai</h3>
                </div>
            </div>
        </div>
    </nav>
    <header></header>
    <main style="margin-top: 5%;">
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Tanggal lahir</td>
                        <td>Umur</td>
                        <td>Alamat</td>
                        <td>Kelas</td>
                        <td>Nilai</td>
                        <td>Hasil</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $content = file_get_contents("json/data.json");
                    $result = json_decode($content, true);
                    foreach ($result as $value) {

                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['tanggal_lahir'] ?></td>
                            <td>
                                <?php

                                $tanggal_lahir = new DateTime($value['tanggal_lahir']);

                                // tanggal hari ini
                                $today = new DateTime('today');

                                // tahun
                                $y = $today->diff($tanggal_lahir)->y;

                                // bulan
                                $m = $today->diff($tanggal_lahir)->m;

                                // hari
                                $d = $today->diff($tanggal_lahir)->d;
                                echo  $y . " tahun " . $m . " bulan " . $d . " hari";
                                ?>
                            </td>
                            <td><?= $value['alamat'] ?></td>
                            <td><?= $value['kelas'] ?></td>
                            <td><?= $value['nilai'] ?></td>
                            <td>
                                <?php
                                switch ($value['nilai']) {
                                    case $value['nilai'] >= 90 && $value['nilai'] <= 100:
                                        echo "A";
                                        break;
                                    case $value['nilai'] >= 80 && $value['nilai'] < 90:
                                        echo "B";
                                        break;
                                    case $value['nilai'] >= 70 && $value['nilai'] < 80:
                                        echo "C";
                                        break;
                                    case $value['nilai'] >= 0 && $value['nilai'] < 70:
                                        echo "D";
                                        break;
                                    default:
                                        echo "Nilai Kategori tidak ditemukan";
                                        break;
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>