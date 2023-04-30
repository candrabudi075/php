<?php
// Menghitung luas persegi
function luas_persegi($sisi) {
  $luas = $sisi * $sisi;
  return $luas;
}

// Menghitung luas persegi panjang
function luas_persegi_panjang($panjang, $lebar) {
  $luas = $panjang * $lebar;
  return $luas;
}

// Menghitung luas segitiga
function luas_segitiga($alas, $tinggi) {
  $luas = 0.5 * $alas * $tinggi;
  return $luas;
}

// Menghitung luas trapesium
function luas_trapesium($sisi1, $sisi2, $tinggi) {
  $luas = 0.5 * ($sisi1 + $sisi2) * $tinggi;
  return $luas;
}

// Menghitung luas lingkaran
function luas_lingkaran($jari) {
  $luas = 3.14 * $jari * $jari;
  return $luas;
}

// Contoh penggunaan fungsi
echo "Luas Persegi dengan sisi 5: " . luas_persegi(5) . "<br>";
echo "Luas Persegi Panjang dengan panjang 5 dan lebar 3: " . luas_persegi_panjang(5, 3) . "<br>";
echo "Luas Segitiga dengan alas 5 dan tinggi 3: " . luas_segitiga(5, 3) . "<br>";
echo "Luas Trapesium dengan sisi atas 5, sisi bawah 7, dan tinggi 4: " . luas_trapesium(5, 7, 4) . "<br>";
echo "Luas Lingkaran dengan jari-jari 5: " . luas_lingkaran(5) . "<br>";
?>
