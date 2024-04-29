<?php

// Menghubungan ke database MySql
$namaHost = "localhost"; // Nama host MySql
$username = "root"; // Username MySql
$password = ""; // Password
$database = "prakwebdb"; // Nama database yang digunakan

// Untuk menangani masalah saat membuat koneksi ke database
try {
    // Untuk membuat koneksi ke server MySql
    $connect = mysqli_connect($namaHost, $username, $password, $database); 
} catch (Exception $e) {
    echo $e->getMessage();
}

?>