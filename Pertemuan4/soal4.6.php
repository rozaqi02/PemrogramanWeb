<?php

// SOAL CERITA NO 4.6
// Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika.
// Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah.
// Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan
// nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah.
// Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96).

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];     // nilai dari 10 siswa
sort($nilaiSiswa);                                          // mengurutkan dari rendah ke tinggi
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);              // tidak membaca 2 nilai terendah dan tertinggi

$total_nilai = array_sum($nilaiSiswa);                      // menghitung total nilai
$rata_nilai = $total_nilai / 6;                             // menghitung nilai rata-rata

echo "<h4>SOAL CERITA NO 4.6<br></h4>";                     // judul
echo "Total Nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: " . $rata_nilai; // output

?>