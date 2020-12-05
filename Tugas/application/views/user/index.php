<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User PABW</title>
</head>
<body>
    <center><h2>User Dashboard</h2></center>
    <p>Selamat datang <?= $this->session->userdata('username');?></p>
    <p>Klik disini untuk <a href="<?=base_url('user/logout');?>" tite="Logout">Logout.</a> </p> 
    <table border="1" cellpadding="10" cellspacing="1" width="100%">
        <thead>
            <tr>
                <th>No</th>    
                <th>Username</th>
                <th>fname</th>
                <th colspan="2">Edit Data</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($data_user as $user) { ?>
            <tr>
                <td style="text-align: center;"><?php echo $no; ?></td>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->fname; ?></td>
                <td><button href="<?= base_url('user/edit').$user->id;?>">Edit</button></td>
                <td><button onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="<?= base_url('user/hapus').$user->id;?>">Hapus</button></td>
            </tr>
        <?php $no++;
         } ?>
        </tbody>
    </table>
    
</body>
</html>