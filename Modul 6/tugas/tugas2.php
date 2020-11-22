<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
    <?php
        function bet($name, $color="green"){
            $length = strlen($name);
            if($length > 20 ){
                $harga = 700;
            }elseif($length >= 11){
                $harga = 500;
            }elseif($length >= 1){
                $harga = 300;
            }else{
                $harga = 0;
            }
            $total = $length * $harga;
            echo '<font color="' .$color .'">nama bet   : ' .$name .'</font><br>';
            echo 'harga bet  : '.'Rp. ' .$total .'</font><br>';
        }
    ?>
    <form method="post">
        <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td><input type="color" name="warna" value="#ff0000"></td>
        </tr>
        </table>
        <button type="submit" name="kirim">submit</button>
    </form><br>
    <?php
        if(isset($_POST['kirim'])){
            bet($_POST['nama'], $_POST['warna']);
        }
    ?>
</body>
</html>