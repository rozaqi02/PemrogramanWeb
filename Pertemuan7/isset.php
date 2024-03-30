<?php

$umur;
if (isset($umur) && $umur >= 18) { // fungsi isset ialah mengecek data apakah ada
    echo "Anda sudah dewasa.";
    echo "<br>"; 
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    echo "<br>";
}

$data = array("nama" => "Jane", "Usia" => 25); //deklarasi array dengan indeks nama dan usia
if (isset($data["nama"])) {
    echo "\n Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array."; //teks yang diprint jika indeks nama tidak ditemukan dalam array
}

?>