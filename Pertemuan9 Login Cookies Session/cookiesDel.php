<?php
    // Menghapus cookie yang berisi user dan set timer ke belakang 3600 detik
    setcookie("user", "Polinema", time()-3600);
?>