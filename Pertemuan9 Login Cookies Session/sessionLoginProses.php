<?php
// Meimpor koneksi.php
    include "koneksi.php";

    // Pengambilan data username dan password
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //Pencocokkan data username dan password
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($connect, $sql);

    // Fungsi untuk menghitung jumlah baris
    $cek = mysqli_num_rows($result);

    // Pemeriksaan baris
    if($cek > 0) {
        // Sesi dimulai
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        <!--teks yang muncul jika berhasil login dan mengarah ke homeSession.php-->
        Anda Berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman Home </a> <?php
    }else{
        ?>
        <!--teks yang muncul jika gagal login dan ada mengarah ke sessionLoginForm.html-->
        Gagal login, silahkan login lagi 
        <a href="sessionLoginForm.html"> Halaman Login </a> <?php
        echo mysqli_error($connect);
    }
?>