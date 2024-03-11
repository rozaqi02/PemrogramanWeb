<?php
$nilaiNumerik = 92;


// mengisi nilai numerik pada variabel nilaiNumerik
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

echo "<br>";
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;


// menggunakan perulangan while yang digunakan untuj menghitung waktu yang diperlukan atlet untuk mencapai 500km
while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak
500 kilometer.";

echo "<br>";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

// menggunakan perulangan for yang digunakan untuk menghitung total buah yang dipanen pada lahan
for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah+= ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

// menggunakan perulangan foreach yang digunakan untuk menghitung total skor
foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br>";
echo "<br>";

// menggunakan array 1D yang gunanya menyimpan nilai dalam variabel nilaiSiswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];


// menggunakan perulangan foreach untuk menampilkan status lulus/tidak lulus yang diambil/di proses dari setiap nilai siswa
foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

?>