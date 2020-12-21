<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th scope="col" colspan='2'>Edit Data</th>
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
        <td><?= $data['angkatan'];?></td>
        <td><button id="btn_edit">Edit</button></td>
        <td><button id="btn_hapus" data-id="<?= $data['nim']?>">Hapus</button></td>
    </tr>
    <?php endwhile; ?>
    <hr>
    <div id="hapus"></div>
    <script>
        $(document).ready(function(){
            $('#btn_hapus').click(function(){
                var data = $({id:$(this).attr(data-id)});
                $.ajax({
                    type    : 'POST',
                    url     : "hapus.php",
                    data    : data,
                    cache   : false,
                    success : function(data){
                        $('#hapus').load("tampil.php");
                    }
                });
                
            });
        });
    </script>
</table>