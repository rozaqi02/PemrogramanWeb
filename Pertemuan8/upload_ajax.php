 <?php
if (isset($_FILES['file'])) {
    $errors = array(); 

    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {  // Looping untuk setiap file yang diupload
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $extensions = array("jpeg", "jpg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {  // Pengecekan format file
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 2097152){  // Pengecekan ukuran file
            $errors[] = "Ukuran file terlalu besar. File maksimal berukuran 2MB";
        }

        if (empty($errors)) {  // Jika tidak ada error file dipindah ke folder 'uploads/'
            $targetDirectory = "uploads/";
            $targetFile = $targetDirectory . $file_name;
            if (move_uploaded_file($file_tmp, $targetFile)) {
                echo "File " . $file_name . " berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file " . $file_name . ".<br>";
            }
        } else {
            echo implode(" ", $errors) . "<br>"; // print jika eror
        }
    }
}
?>