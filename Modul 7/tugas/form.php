<?php 
    include "koneksi.php";
    $query="SELECT * FROM jurusan";
    $data = mysqli_query($sambung, $query);
?>

<h2>============Tambah Siswa============</h2>
<form action="tambahmhs.php" method="POST">
<p>NRP : <input type="text" name="nrp"></p>
<p>Nama : <input type="text" name="nama"></p>
<p>Alamat : <textarea name="alamat"></textarea></p>
<p>Jurusan : <select name="jurusan" id="" >
    <?php
    while ($jurusan=mysqli_fetch_array($data)){ 
    ?>
    <option value="<?php echo $jurusan['id_jur']; ?>"><?php echo $jurusan['nama']; ?></option>
    <?php
    }
    ?>
</select></p>
<button type ="submit" name="kirim">Simpan</button>
</table>
</form>
<br>

<h2>============Search Data============</h2>
<form action="searchmhs.php" method="POST">
<p>Nama : <input type="text" name="keyword" placeholder="Masukkan nama">  <button type ="submit" name="kirim">Cari</button></p>
</form>

<h2>============Delete Data============</h2>
<form action="deletemhs.php" method="POST">
<p>NRP : <input type="text" name="keyword" placeholder="Masukkan NRP">  <button type ="submit" name="kirim">Hapus</button></p>
</form>