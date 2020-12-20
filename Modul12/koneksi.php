<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "belajar_ajax";

    $conn = mysqli_connect($host, $user, $pw, $db);
    if (!$conn) {
        die("Koneksi Gagal!".mysqli_connect_error());
    }
?>