<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM method='POST'>
        masukan berapa kali makan <input type="text" name='banyakmakan'>
    </FORM>
</body>
</html>
<?php
    $banyak_makan = $_POST['banyakmakan']; //inputan

    for($i=1;$i<=$banyak_makan;$i++){
        $waktu_makan = 'pagi'; //harusnya inputan saya belum bisa input di php
        if($waktu_makan = 'pagi'){
            echo 'makan bubur <br>';
        }
        elseif ($waktu_makan = 'siang'){
            echo 'ayam geprek <br>';
        }
        else{
            echo 'nasi goreng <br>';
        }
    }
?>