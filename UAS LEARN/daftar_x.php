<?php
include("koneksi.php");
$tampil_daftar = "SELECT*FROM tbl_fiqrydiky";
$hasil = mysqli_query($koneksi,$tampil_daftar);
// var_dump($hasil);
// if($hasil){
//     echo "berhasil";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9af970ca31.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/9af970ca31.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="">DAFTAR DATA</h1>
        <table class="table table-striped-columns">
            <tr style="text-align: center; background-color:yellow">
                <th>ID</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>EMAIL</th>
                <th>AKSI</th>
            </tr>
            <?php
                while($rows = mysqli_fetch_assoc($hasil)){
            ?>
            <tr >
                <td style="text-align: center;"><?=$rows["id_x"]?></td>
                <td><?=$rows["nama_x"]?></td>
                <td><?=$rows["alamat_x"]?></td>
                <td><?=$rows["email_x"]?></td>
                <td>
                    <a href=""><i class="fas fa-pen-to-square" style="color: green; margin:5px"></i></a>
                    <a href=""><i class="fas fa-trash" style="color: red;"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>