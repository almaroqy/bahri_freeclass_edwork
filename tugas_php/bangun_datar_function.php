<?php
function luas_persegi_panjang($panjang, $lebar)
{
    $hasil_PP = $panjang * $lebar;

    echo "Panjang: $panjang cm";
    echo "<br>";
    echo "lebar: $lebar cm";
    echo "<br>";
    echo "Luas persegi panjang: $hasil_PP cm<sup>2</sup>";
    echo "<hr>";
}
luas_persegi_panjang(9, 5);

function luas_persegi($sisi)
{
    $hasil_P = $sisi ** 2;

    echo "Panjang sisi persegi: $sisi cm";
    echo "<br>";
    echo "Luas Persegi: $hasil_P cm<sup>2</sup>";
    echo "<hr>";
}
luas_persegi(5, 2);

function luas_segitiga($alas = 5, $tinggi = 2)
{
    $hasil_S = 1 / 2 * ($alas * $tinggi);

    echo "Panjang alas segitiga: $alas cm";
    echo "<br>";
    echo "Panjang tingi segitiga: $tinggi cm";
    echo "<br>";
    echo "Luas segitiga: $hasil_S cm<sup>2</sup>";
    echo "<hr>";
}
luas_segitiga();

function luas_lingkaran($jari2 = 3)
{
    $hasil_L = pi() * $jari2;

    echo "Jari-jari lingkaran: $jari2 cm";
    echo "<br>";
    echo "Luas lingkaran: $hasil_L cm<sup>2</sup>";
    echo "<hr>";
}
luas_lingkaran();

function luas_trapesium($tinggi_trapesium = 5, $sisi_sejajar_A = 4, $sisi_sejajar_B = 8)
{
    $hasil_T  = 1 / 2 * $tinggi_trapesium * ($sisi_sejajar_A + $sisi_sejajar_B);

    echo "Tinggi trapesium: $tinggi_trapesium cm";
    echo "<br>";
    echo "Sisi sejajar trapesium A: $sisi_sejajar_A cm";
    echo "<br>";
    echo "Sisi sejajar trapesium B: $sisi_sejajar_B cm";
    echo "<br>";
    echo "Luas trapesium: $hasil_T cm<sup>2</sup>";
    echo "<hr>";
}
luas_trapesium();
