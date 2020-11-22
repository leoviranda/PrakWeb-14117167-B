<?php
include "koneksi.php";
$nrp = $_POST['keyword'];
$query="DELETE FROM mahasiswa WHERE nrp= $nrp";

$hasil=mysqli_query($sambung, $query);

if($hasil){
  echo "<script>alert('data terhapus');</script>";
  header('Location:tampilmhs.php');
}else{
  echo "Hapus data gagal";
}
?>