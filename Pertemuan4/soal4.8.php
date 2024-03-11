<?php

// SOAL CERITA NO 4.8
// Seorang pemain game ingin menghitung total skor mereka dalam permainan.
// Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan.
// Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan.
// Buat tampilan baris pertama “Total skor pemain adalah: (poin)”.
// Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”

$skor_pemain = 550;                                                              // skot pemain

echo "<h4>SOAL CERITA NO 4.8<br></h4>";
echo "Total skor pemain adalah: " . $skor_pemain . "<br>";

$hadiah_tambahan = ($skor_pemain > 500) ? "YA" : "TIDAK";                       // hadiah tambahan jika skor > 500
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan;          // output

?>