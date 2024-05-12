<?php
// Mulai sesion PHP
session_start();

// Menyertakan file koneksi ke database
include 'koneksi.php';

// Menyertakan file yang berisi fungsi untuk melindungi formulir dari serangan CSRF
include 'csrf.php';

// Mengambil ID anggota yang dikirimkan melalui metode POST
$id = $_POST['id'];    

// Query untuk menghapus data anggota berdasarkan ID
$query = "DELETE FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id); 
$sql->execute();

// Merespons dalam format JSON untuk menandakan keberhasilan operasi
echo json_encode(['success' => 'Sukses']);

// Menutup koneksi ke database
$db1->close();
?>