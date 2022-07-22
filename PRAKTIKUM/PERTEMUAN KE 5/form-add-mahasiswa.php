<?php
include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <center>
        <h2>Tambah data mahasiswa</h2>
        <form action="action-add.php" method="POST">
            <label for="nrp">NRP: </label>
            <input type="text" name="nrp">
            <br><br>
            <label for="nama" >Nama: </label>
            <input type="text" name="nama">
            <br><br>
            <label for="email">Email: </label>
            <input type="email" name="email">
            <br><br>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat">
            <br><br>
            <button type="submit">Tambahkan</button>
        </form>
    </center>
</body>
</html>