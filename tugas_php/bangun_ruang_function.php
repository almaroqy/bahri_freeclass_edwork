<?php
function volume_balok($panjang, $lebar, $tinggi)
{
    $hasil_Bal = $panjang * $lebar * $tinggi;

    echo "Panjang Balok: $panjang cm";
    echo "<br>";
    echo "Lebar Balok: $lebar cm";
    echo "<br>";
    echo "Tinggi Balok: $tinggi cm";
    echo "<br>";
    echo "Volume Balok: $hasil_Bal cm<sup>3</sup>";
    echo "<hr>";
}
volume_balok(10, 5, 8);

function volume_kubus($sisi)
{
    $hasil_Kub = $sisi ** 3;

    echo "Panjang Sisi Kubus: $sisi cm";
    echo "<br>";
    echo "Volume Kubus: $hasil_Kub cm<sup>3</sup>";
    echo "<hr>";
}
volume_kubus(10);

function volume_limas_segiempat($panjang_sisi_alas, $tinggi_segitiga_sisi)
{
    $setengah_sisi_alas = 1 / 2 * $panjang_sisi_alas;
    $tinggi_limas = sqrt((($tinggi_segitiga_sisi) ** 2) - (($panjang_sisi_alas) ** 2)); //tinggi antara unjung limas dengan titik tengah alas //sqrt(tinggi segitiga sisi^2 - panjang sisi alas ^2)
    $luas_alas = $panjang_sisi_alas ** 2;
    $hasil_L = 1 / 3 * $luas_alas * $tinggi_limas;

    echo "Panjang sisi alas Limas Segiempat: $panjang_sisi_alas cm";
    echo "<br>";
    echo "Panjang tinggi segitiga sisi Limas Segiempat: $tinggi_segitiga_sisi cm";
    echo "<br>";
    echo "Panjang tinggi Limas Segiempat: $tinggi_limas cm";
    echo "<br>";
    echo "Luas Alas Limas Segiempat: $luas_alas cm";
    echo "<br>";
    echo "Volume limas Segitiga: $hasil_L cm<sup>3</sup>";
    echo "<hr>";
}
volume_limas_segiempat(6, 10);

function volume_bola($jari2)
{
    $hasil_Bol = 4 / 3 * pi() * $jari2 ** 2;
    echo "Panjang jari - jari bola: $jari2 cm";
    echo "<br>";
    echo "Volume Bola: $hasil_Bol cm<sup>3</sup>";
    echo "<hr>";
}
volume_bola(7);

function volume_prisma_segitiga($alas_prisma, $tinggi_segitiga, $tinggi_prisma)
{
    $hasil_Pris = (1 / 2 * ($alas_prisma * $tinggi_segitiga) * $tinggi_prisma);

    echo "Panjang alas Prisma segitiga: $alas_prisma cm";
    echo "<br>";
    echo "Panjang tinggi segitiga disisi Prisma segitiga: $tinggi_segitiga cm";
    echo "<br>";
    echo "Panjang tinggi Prisma segitiga: $tinggi_prisma cm";
    echo "<br>";
    echo "Volume Prisma segitiga: $hasil_Pris cm<sup>3</sup>";
}
volume_prisma_segitiga(5, 4, 20);
