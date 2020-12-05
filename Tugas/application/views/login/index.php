<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?= $this->session->flashdata('message');?>
    <form method="post" action="<?=base_url('login/cekLogin')?>">
        <table>
            <tr>
                <td align="center" colspan="2">Enter Login Details</td>
            </tr>
            <tr>
                <td align="right">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td align="right">Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>