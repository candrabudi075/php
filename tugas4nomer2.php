<?php
$rows = 9; // jumlah baris
$stars = array_fill(0, $rows, '*'); // membuat array bintang dengan jumlah sesuai jumlah baris
for ($i = $rows; $i >= 1; $i--) { // looping untuk setiap baris, dimulai dari baris terakhir hingga baris pertama
    echo implode('', $stars) . "\n"; // menggabungkan array bintang dan menambahkan karakter newline
    array_splice($stars, $i-1, 1); // menghapus satu elemen terakhir dari array bintang pada setiap iterasi
    echo "<br>";
}
?>
