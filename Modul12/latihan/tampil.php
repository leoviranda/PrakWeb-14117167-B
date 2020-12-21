<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
    </tr>
    <?php
        include "koneksi.php";
        $hasil = mysqli_query($conn, "SELECT * FROM mahasiswa order by nim asc");
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