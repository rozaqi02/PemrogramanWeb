<?php
    // Impor koneksi.php
    include "koneksi.php";

    // Pengambilan data username dan password
    $username=$_POST['username'];
    $password=md5 ($_POST['password']);
    // Pencocokan username dan password pada database
    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $row= mysqli_fetch_assoc($result);

    // Pemeriksaan level pengguna
    if($row['level']== 1) {
        // Jika level 1 (admin), muncul teks dan tautan ke homeAdmin.html
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    }else if($row['level']== 2) {
        // Jika level 2 (guest), muncul teks dan tautan ke homeGuest.html
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeGuest.html">Halaman HOME</a>
        <?php
    }else {
        // Jika gagal login, muncul teks dan tautan ke loginForm.html
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>