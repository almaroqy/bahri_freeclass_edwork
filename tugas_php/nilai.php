<?php
$kategori = -1;

switch ($kategori) {
    case $kategori >= 90 && $kategori <= 100:
        echo "Merupaakan kategori A";
        break;
    case $kategori >= 80 && $kategori < 90:
        echo "Merupaakan kategori B";
        break;
    case $kategori >= 70 && $kategori < 80:
        echo "Merupaakan kategori C";
        break;
    case $kategori >= 0 && $kategori < 70:
        echo "Merupaakan kategori D";
        break;
    default:
        echo "Nilai Kategori tidak ditemukan";
        break;
}
