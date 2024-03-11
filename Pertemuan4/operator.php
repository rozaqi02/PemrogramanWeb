<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// menampilkan hasil operasi matematika
echo "$a + $b = {$hasilTambah}<br>";
echo "$a - $b = {$hasilKurang}<br>";
echo "$a * $b = {$hasilKali}<br>";
echo "$a / $b = {$hasilBagi}<br>";
echo "$a % $b = {$sisaBagi}<br>";
echo "$a ** $b = {$pangkat}<br>";


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// menampilkan hasil operasi persamaan, ketidaksamaan, lebih kecil, lebih besar, lebih kecil sama dengan, dan lebih besar sama dengan
echo "<br> $a == $b = {$hasilSama}<br>";
echo "$a != $b = {$hasilTidakSama}<br>";
echo "$a < $b = {$hasilLebihKecil}<br>";
echo "$a > $b = {$hasilLebihBesar}<br>";
echo "$a <= $b = {$hasilLebihKecilSama}<br>";
echo "$a >= $b = {$hasilLebihBesarSama}<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// menampilkan hasil operasi AND, OR, dan negasi terhadap $a dan $b
echo "<br>$a && $b = {$hasilAnd}<br>";
echo "$a || $b = {$hasilOr}<br>";
echo "!$a = {$hasilNotA}<br>";
echo "!$b = {$hasilNotB}<br>";

$p1 = $a += $b;
$p2 = $a -= $b;
$p3 = $a *= $b;
$p4 = $a /= $b;
$p5 = $a %= $b;

// menampilkan hasil operasi penugasan dengan operasi aritmetika terhadap $a dan $b
echo "$p1 <br>";
echo "$p2 <br>";
echo "$p3 <br>";
echo "$p4 <br>";
echo "$p5 <br><br>";
echo "============== <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// menampilkan hsil perbandingan identitas antara $a dan $b
echo "a === b : $hasilIdentik <br>";
echo "a !== b : $hasilTidakIdentik <br>";
echo "============== <br>";

// perhitungan persentase kursi yang masih kosong di restoran
$kursi = 45;
$terisi = 28;
$persen = ($kursi - $terisi) / $kursi * 100;

//variabel $persen% menyimpan hasil perhitungan persentase kursi kosong
echo "Kursi yang kosong sebesar : $persen%";    