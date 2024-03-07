<?php
// 1. membuat array
$hari = array("senin", "selasa", "rabu");
$bulan = ["januari", "febuari", "maret"];
$mahasiswa = ["haekal", 3.1, false];
// 2. mencetak isi array
// mencetak 1 nilai pada array, menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";
// cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br";
var_dump($mahasiswa);




// 3. memamnipulasi isi array
// menambah isi array
// si akhir: [] atau array_push()
$hari[] = "kamis";
$hari[] = "jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);
echo "<br>";

// diawal array :

print_r($mahasiswa);
echo "<hr>";

// menghapus isi array
// dibelakang: array_pop();
// didepan : array_shift();
array_pop($hari);
array_pop($bulan);
print_r($bulan);
echo "<br>";
print_r($bulan);
