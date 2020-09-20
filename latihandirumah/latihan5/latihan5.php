<?php

// array 
// array adalah variabel yang dapat menampung banyak nilai
// elemen pada array bisa bertipe beda

// cara lama membuat array
$hari = array("senin", "selasa", "rabu");
// cara baru membuat array
$bulan = ["januari", "febuari", "maret"];
// elemen array dapat berbeda
$arr1 = [123, "tulisan", true];

// menampilkan semua array 
// var_dump($bulan);
// echo "<br>";
// print_r($bulan);

//menampilkan 1 elemen pada array
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen pada array 
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
