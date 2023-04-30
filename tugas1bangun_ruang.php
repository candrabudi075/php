<?php
// Menghitung volume kubus
function volume_kubus($sisi) {
  $volume = $sisi * $sisi * $sisi;
  return $volume;
}

// Menghitung volume balok
function volume_balok($panjang, $lebar, $tinggi) {
  $volume = $panjang * $lebar * $tinggi;
  return $volume;
}

// Menghitung volume tabung
function volume_tabung($jari, $tinggi) {
  $volume = 3.14 * $jari * $jari * $tinggi;
  return $volume;
}

// Contoh penggunaan fungsi
echo "Volume Kubus dengan sisi 5: " . volume_kubus(5) . "<br>";
echo "Volume Balok dengan panjang 5, lebar 3, dan tinggi 4: " . volume_balok(5, 3, 4) . "<br>";
echo "Volume Tabung dengan jari-jari 5 dan tinggi 10: " . volume_tabung(5, 10) . "<br>";
?>
