<?php

// SOAL CERITA NO 4.7
// Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000.
// Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000.
// Bantu pelanggan ini untuk menghitung harga yang harus
// dibayar setelah mendapatkan diskon.

$harga_produk = 120000;                                     // harga produk
$diskon_persen = 20;                                        // diskon dalam bentuk persentase
$min_for_diskon = 100000;                                   // batas harga minimum untuk mendapat diskon

if ($harga_produk > $min_for_diskon) {                      // menghitung harga setelah mendapat diskon
    $diskon = ($diskon_persen / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $diskon;
} else {
    $harga_setelah_diskon = $harga_produk;                  
}
echo "<h4>SOAL CERITA NO 4.7<br></h4>";
echo "Harga yang harus dibayar setelah diskon adalah: Rp. " . $harga_setelah_diskon;     // output

?>