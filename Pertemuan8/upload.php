<?php
if (isset($_POST["submit"])) {   // Memeriksa apakah formulir telah dikirimkan
    $targetDirectory = "documents/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));  // Membuat ekstensi file menggunakan strtolower dan pathinfo
    $allowedExtensions = array("jpeg", "jpg", "png", "gif");
    $maxFileSize = 10 * 1024 * 1024; // Maksimal ukuran 10MB

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file"; // Print jika gagal mengunggah
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan."; // Print jika jenis dokumen atau ukuran file tidak sesuai
    }
}

/*if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Membuat direktori tujuan untuk menyimpan file.
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtentions = array("txt", "pdf", "doc", "docx");
    
    $maxFileSize = 10 * 1024 * 1024; 

    if (in_array($fileType, $allowedExtentions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
} else {
    echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
}
} */
?>