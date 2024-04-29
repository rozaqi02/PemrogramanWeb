<?php
// Impor koneksi.php
include "koneksi.php";

// Pengambilan data username dan password
$username=$_POST['username'];
$password=md5($_POST['password']);

// Pemeriksaan kecocokan data username dan password pada database 
$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $query);
$cek=mysqli_num_rows($result);


if($cek) {
    // Jika berhasil, akan muncul teks dan berpindah ke homeAdmin.html
    echo "Anda berhasil login. silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php 
}else{
    // Jika gagal, akan muncul teks dan berpindah ke loginForm.html 
    echo "Anda gagal login.silahkan "; ?>
    <a href="loginForm.html">Login kembali</a>
<?php
// Jika error
 echo mysqli_error($connect);
}
?>