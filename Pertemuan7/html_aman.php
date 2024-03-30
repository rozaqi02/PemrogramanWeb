<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

if (empty($nama)) { // Validasi Nama
    $errors[] = "Nama harus diisi.";
}

if (empty($email)) { // Validasi Email
    $errors[] = "Email harus diisi.";
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}

if (is_array((@$errors))){ // Jika ada kesalahan validasi
    foreach ($errors as $error): ?>
      <?php echo $error; ?>
      <br/>
    <?php endforeach;
  }
    else {
// Lanjutkan dengan pemrosesan data jika semua validasi berhasil 
// Misalnya, menyimpan data ke database atau mengirim email
echo "Data berhasil dikirim: Nama = $nama, Email = $email";
}
}
?>