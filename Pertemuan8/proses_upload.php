<?php
$targetDirectory = "documents/";

if (!file_exists($targetDirectory)) {  // Pengecekan direktori penyimpanan
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {  // Perulangan for
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        
        
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>"; // Print jika berhasil mengunggah file
        } else {
            echo "Gagal mengunggah file $fileName.<br>"; // Print jika gagal mengunggah file
        }
    }
} else {
    echo "Tidak ada file yang diunggah."; // Print jika kosong
}
?>