<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Document</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multipe" accept=".jpg, .jpeg, .png, .gif" />
        
        <input type="submit" value="Unggah" />  <!--Membuat tombol dengan teks "Unggah" untuk mengirim form-->
</body>
</html>