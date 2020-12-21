<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    <?php
        include "koneksi.php";
        if (isset($_POST['prodi'])) {
            $prodi = $_POST['prodi'];
        }else {
            $prodi = '';
        }

        $hasil = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE prodi = '".$prodi."' ORDER BY nim");
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) :
            $no++;
    ?>
    <tr>
        <td><?= $no;?></td>
        <td><?= $data['nim'];?></td>
        <td><?= $data['nama'];?></td>
        <td><?= $data['prodi'];?></td>
    </tr>
    <?php endwhile; ?>
</table>