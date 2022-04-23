<?php
    include "koneksi.php";
    $id = $_GET["id"];
    $tampil = "SELECT * FROM tb_125 WHERE id_125 = $id";
    // var_dump($tampil);
    $hasil = mysqli_query($koneksi, $tampil);
    // var_dump($hasil);die;
    
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
    <title>Update data</title>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
            <figure class="text-center mt-5">
                <blockquote class="blockquote">
                    <h1>EDIT DATA</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                    data yang ditambah <cite title="Source Title"></cite>
                </figcaption>
            </figure>

            <!-- form tambah data -->
            <?php
                While ($row = mysqli_fetch_array($hasil)){
            ?>
            <form action='action-update-data.php' method="POST">
            <input type="hidden" class="form-control" id="nama" name="id_data" value="<?php echo $row['id_125'];?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama_data" value="<?php echo $row['nama_125'];?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" name="email_data" value="<?php echo $row['email_125'];?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success sm">Update</button>
                </div>
            </form>
            <?php 
            }?>

    </div>
</body>
</html>