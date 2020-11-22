<table border="1" width="600px">
    <thead style="background-color: gold;">
        <tr>
            <th>No</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th scope="col" colspan="2">Hapus Data</th>
        </tr>
    </thead>

    <?php 
    include "koneksi.php";
    $keyword = $_POST['keyword'];
    $query="SELECT * FROM mahasiswa WHERE nama like '%$keyword%'";
    $hasil = mysqli_query($sambung, $query);
    $no = 1;
    while ($datamhs=mysqli_fetch_array($hasil)){ ?>
    <tbody>
        <tr>
            <td style="text-align: center;"><?php echo $no; ?></td>
            <td><?php echo $datamhs['nrp']; ?></td>
            <td><?php echo $datamhs['nama']; ?></td>
            <td><?php echo $datamhs['alamat']; ?></td>
            <td><?php echo $datamhs['id_jur']; ?></td>
            <td style="text-align: center;"><button><a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="hapussiswa.php? id=<?php echo $datasiswa['id_siswa']?>" style="color: black; text-decoration: none;"> Hapus </a></button></td>
        </tr>
    </tbody>
    <?php $no++;?>
    <?php } ?>
</table>
<button><a href="form.php" style="color: black; text-decoration: none;"> Form </a></button>