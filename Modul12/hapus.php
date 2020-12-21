<?php
    include "koneksi.php";

    $sql = "DELETE FROM mahasiswa WHERE nim = ''$_POST[nim]";
    $hasil = mysqli_query($conn, $sql);
?>