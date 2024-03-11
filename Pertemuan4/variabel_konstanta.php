<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;

// menampilkan hasil penjumlahan dari angka1 dan angka2 dan menampilkan hasil penjumlahan pada variabel hasil
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

// mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

// mengakses konstanta dengan cara menggunakan Nama_Konstanta
echo "Selamar datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . " .";
?>