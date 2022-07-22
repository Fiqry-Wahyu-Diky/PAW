<?php
    include "connect.php";
    $id = $_GET['id'];
    $data =  "SELECT*FROM tbl_mahasiswa WHERE No = $id";
    $hasil = mysqli_query($connect,$data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <center>
        <h2>Edit data mahasiswa</h2>
        <?php
        while($row = mysqli_fetch_array($hasil)){
        ?>
        <form action="action-edit.php" method="POST">
            <input type="hidden" name="id"  value="<?=$row['No']?>">
            <label for="nrp">NRP: </label>
            <input type="text" name="nrp" value="<?=$row['nrp']?>">
            <br><br>
            <label for="nama" >Nama: </label>
            <input type="text" name="nama" value="<?=$row['nama']?>">
            <br><br>
            <label for="email">Email: </label>
            <input type="email" name="email" value="<?=$row['email']?>">
            <br><br>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" value="<?=$row['alamat']?>">
            <br><br>
            <button type="submit">Tambahkan</button>
        </form>
        <?php } ?>
    </center>
</body>
</html>