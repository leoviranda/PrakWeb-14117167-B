<?php
    include "koneksi.php";

    $nim    = $_POST["nim"];
    $nama   = $_POST["nama"];
    $prodi  = $_POST["prodi"];

    $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
    $hasil = mysqli_query($conn, $sql);
?>