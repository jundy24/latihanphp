<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// array adalah pasangan antara key dan value
// key nya adalah index, yang dimulai dari nol

// cara lama membuat array
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu");

// cara baru membuat array
$bulan = ["januari", "februari", "maret", "april"];
$random = [123, "tulisan", false];


// cara menampilkan array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
// menampilkan satu elemen pada array
// echo $random[0];
// echo "<br>";
// echo $bulan[3];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "minggu";
echo "<br>";
var_dump($hari);








?>