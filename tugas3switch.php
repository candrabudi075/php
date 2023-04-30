<?php
// Menghitung kategori nilai
function kategori_nilai($nilai) {
  if ($nilai >= 90 && $nilai <= 100) {
    return "A";
  } elseif ($nilai >= 80 && $nilai < 90) {
    return "B";
  } elseif ($nilai >= 70 && $nilai < 80) {
    return "C";
  } else {
    return "D";
  }
}

// Contoh penggunaan fungsi
echo "Nilai 95 termasuk kategori: " . kategori_nilai(95) . "<br>";
echo "Nilai 85 termasuk kategori: " . kategori_nilai(85) . "<br>";
echo "Nilai 75 termasuk kategori: " . kategori_nilai(75) . "<br>";
echo "Nilai 65 termasuk kategori: " . kategori_nilai(65) . "<br>";
?>
