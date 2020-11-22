<?php
include 'koneksi.php';

$create = mysqli_query($sambung, "INSERT INTO mahasiswa VALUES('$_POST[nrp]','$_POST[nama]','$_POST[alamat]','$_POST[jurusan]')");
if($create){
    echo "<script>alert('data tersimpan');</script>";
    header('Location:tampilmhs.php');
}else{
    echo "<script>alert('data gagal tersimpan');</script>";
    header('Location:tampilmhs.php');
}

?>