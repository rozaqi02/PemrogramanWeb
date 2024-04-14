<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <script>
        function previewImage(event){
            var file = event.target.files[0]; // Mendapatkan file yang diunggah
            var read = new FileReader();
            read.onload = function(e){
                var previewImage = document.getElementById("preview");
                previewImage.style.display = "block"; // Tampilkan gambsr
                previewImage.src = e.target.result;
                previewImage.style.width = "200px";
                previewImage.style.height = "auto";
            }
            read.readAsDataURL(file);
        }
    </script>
    <form action="upload.php" method="post" enctype="multipart/form-data">  <!--Memanggil file upload.php untuk menampilkan form input dan tombol submit-->
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="previewImage(event)">

        <img id="preview" src="#" alt="preview" style="display: none;">  <!-- Menampilkan gambar -->
        <input type="submit" value="Upload File" name="submit">
    </form>
    
</body>
</html>