<?php
    include "koneksi.php";
    $dataTampil = "SELECT*FROM tb_125";
    $hasil = mysqli_query($koneksi,$dataTampil);
    
    
    // if($hasil){
    //     echo 'berhasil';
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <h1>DATA SISWA</h1>
            </blockquote>
            <figcaption class="blockquote-footer">
                data siswa yang ada <cite title="Source Title"></cite>
            </figcaption>
        </figure>

        <a href="form-add-data.php" class='btn btn-primary sm mt-5'>Tambah</a>
    <!-- table data -->
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
                while($row = mysqli_fetch_array($hasil)){
            ?>
            <tr>
                <td><?=$row['id_125'];?></th>
                <td><?=$row['nama_125'];?></td>
                <td><?=$row['email_125'];?></td>
                <td>
                    <a href="form-update-data.php?id=<?=$row['id_125']?>" class='btn btn-success sm'>Edit</a>
                    <a href="action-delete-data.php?id=<?=$row['id_125']?>" class='btn btn-danger sm'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>