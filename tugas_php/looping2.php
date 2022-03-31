<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping 2</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr style="background-color: #0db6dd;">
                <td>No</td>
                <td>Nama</td>
                <td>Kelas</td>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 1;
            $nama = 1;
            $kelas = 10;
            while ($no <= 10) {
                while ($nama <= 10) {
                    while ($kelas >= 1) {
            ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= "Nama Ke " ?><?= $nama++ ?></td>
                            <td><?= "Kelas" ?><?= $kelas-- ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>