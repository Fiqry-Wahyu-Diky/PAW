<?php
    include "connect.php";
    $data =  "SELECT*FROM tbl_mahasiswa";
    $hasil = mysqli_query($connect,$data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    <h1>Modul V PHP & MYSQL</h1>
    <p>Nama/NRP : Fiqry Wahyu Diky W/200411100125</p>
    <hr>
    <h1>Master Data Mahasiswa</h1>
    <button><a href="form-add-mahasiswa.php" style="text-decoration:none;">Tambah</a></button>
    <br><br>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>NO</th>
            <th>NRP</th>
            <th>NAMA</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Operasi</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?=$row['No']?></td>
            <td><?=$row['nrp']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['alamat']?></td>
            <td>
                <a href="form-edit-data.php?id=<?php echo $row['No'];?>">Edit</a>
                <a href="hapus-data.php?id=<?php echo $row['No'];?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>