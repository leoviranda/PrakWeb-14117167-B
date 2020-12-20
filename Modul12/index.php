<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="tampil">informasi akan ditampilkan disini</div>
    <button id="btn_tampil">Tampilkan</button>
    <script>
        $(document).ready(function(){
            $('#btn_tampil').click(function(){
                $('#tampil').load('demo.php');
            });
        });
    </script>
</body>
</html>