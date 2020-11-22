<?php
$sambung = new mysqli("localhost","root","","mahasiswa");
if (!$sambung)
{
    die('could not connect:'.mysql_error());    
}

// class siswa{
//     public $koneksi;
//     function   __construct($sambung){
//         $this -> koneksi = $sambung;
//     }

//     function set_siswa(){
//         $ambildata = $this->koneksi->query("select * from mahasiswa");
//         while($pecah = $ambildata -> fetch_assoc()){
//             $data[] = $pecah;
//         }
//         return $data;
//     }

//     function get_siswa($nama,$alamat){
//         $this -> koneksi -> query("insert into mahasiswa (nama,alamat,foto) values ('$nrp','$nama','$alamat','$jurusan')");
//     }
// }
// $siswa = new siswa($sambung);
?>