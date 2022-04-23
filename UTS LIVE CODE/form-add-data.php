<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
            <figure class="text-center mt-5">
                <blockquote class="blockquote">
                    <h1>TAMBAH DATA</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                    data yang ditambah <cite title="Source Title"></cite>
                </figcaption>
            </figure>

            <!-- form tambah data -->
            <form action='action-add-data.php' method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary sm">Submit</button>
                </div>
            </form>

    </div>
</body>
</html>