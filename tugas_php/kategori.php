<?php
$nama = "Andi";
$berat_badan = 50;
$tinggi_badan = 180;
$BMI = $berat_badan / (($tinggi_badan / 100) ** 2);

if ($BMI < 18.1) {
    echo "<p>Halo, $nama. Nilai BMI anda adalah $BMI, anda termasuk <a style= 'color: #1e81b0;'>Underwight";
} else if ($BMI > 18.1 && $BMI <= 23.1) {
    echo "Halo, $nama. Nilai BMI anda adalah $BMI, anda termasuk <a style= 'color: 	#008000;'>Normal";
} else if ($BMI > 23.1 && $BMI <= 28.1) {
    echo "Halo, $nama. Nilai BMI anda adalah $BMI, anda termasuk <a style= 'color: #da7036;'>Overweight";
} else {
    echo "Halo, $nama. Nilai BMI anda adalah $BMI, anda termasuk <a style= 'color: #FF0000;'>OBESITAS!!!";
}
