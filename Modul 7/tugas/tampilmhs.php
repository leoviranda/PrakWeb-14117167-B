<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <br>
    <table border="1" width="600px">
        <thead style="background-color: gold;">
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jurusan</th>
            </tr>
        </thead>

        <?php 
        include "koneksi.php";
        $query="SELECT * FROM mahasiswa";
        $hasil = mysqli_query($sambung, $query);
        $no = 1;
        while ($datasiswa=mysqli_fetch_array($hasil)){ ?>
        <tbody>
            <tr>
                <td style="text-align: center;"><?php echo $no; ?></td>
                <td><?php echo $datasiswa['nrp']; ?></td>
                <td><?php echo $datasiswa['nama']; ?></td>
                <td><?php echo $datasiswa['alamat']; ?></td>
                <td><?php echo $datasiswa['id_jur']; ?></td>
            </tr>
        </tbody>
        <?php $no++;?>
        <?php } ?>
        </table>
        <button><a href="form.php" style="color: black; text-decoration: none;"> Form </a></button>

</body>
</html>