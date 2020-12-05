<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User PABW</title>
</head>
<body>
    <table border="0" cellpadding="10" cellspacing="1" width="100%">
        <tr>
            <td align="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
            Selamat datang <?= $this->session->userdata('username');?>.
            Klik disini untuk <a href="<?=base_url('user/logout');?>" tite="Logout">Logout.</a> 
            </td>
        </tr>
    </table>
</body>
</html>