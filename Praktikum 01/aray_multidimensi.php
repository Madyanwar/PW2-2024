<?php

// Deklarasi array multidimensi mahasiswa
$mahasiswa = [
  ["Muhammad Yanwar", "Teknik Informatika"],
  ["Rasid", "Sistem Informasi"],
  ["Erik", "Teknik Informatika"],
  ["Rofiq", "SIstem Informasi"]
];

// Cetak isi array menggunakan perulangan foreach
foreach ($mahasiswa as $mhs) {
  echo "Nama : " . $mhs[0] . "<br>";
  echo "Jurusan : " . $mhs[1] . "<br>";
  echo "<br>";
}

?>