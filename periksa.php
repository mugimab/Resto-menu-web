<?php
require "functions.php";

if (isset($_POST["daftar"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('User baru berhasil ditambah');
            window.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('Username sudah ada');
            window.location.href = 'registrasi.php';
        </script>";
    }
}
?>
