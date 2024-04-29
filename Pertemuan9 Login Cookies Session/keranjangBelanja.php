<html>
<head>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php
        // Pengambilan nilai total jumlah novel dan jumlah buku yang dibeli tadi dari cookie
        $beliNovel=$_COOKIE['beliNovel'];
        $beliBuku = $_COOKIE['beliBuku'];

        // Memprint total jumlah novel dan buku
        echo "Jumlah Novel : ". $beliNovel . "<br>";
        echo "Jumlah Buku : " . $beliBuku ;
    ?>
</body>
</html>