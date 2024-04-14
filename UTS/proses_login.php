<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['username'] === '2241760123' && $_POST['password'] === '2241760123') {
    $_SESSION['logged_in'] = true;

    header('Location: form_pengunduran.html');
    exit();
}

header('Location: login.html?error=1');
exit();
?>
