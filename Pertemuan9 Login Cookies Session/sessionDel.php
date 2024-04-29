<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php // Menghapus dan menghancurkan sesi
        session_unset();
        session_destroy();

        // Teks yang akan muncul saat sesi berhasil dihapus
        echo "All session variables are now removed, and the session is destroyed."
    ?>
</body>
</html>