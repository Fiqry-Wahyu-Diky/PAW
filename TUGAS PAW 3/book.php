<?php
  include "koneksi.php";
  $databuku = "SELECT * FROM tbl_125";
  $sql = mysqli_query($koneksi, $databuku);
  // var_dump($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data buku</title>
    <!-- konek css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div style="width: 90%; margin: auto;">
        <!-- navbar -->
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <h1 style="font-size: 30px; color: white; ">
                  TUGAS 3 PAW GET DATABASE
                </h1>
            </div>
        </nav>

        <!-- title -->
        <figure class="text-center mt-4">
            <blockquote class="blockquote">
                <p>Data Buku yang Tersedia</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create, Read, Update, and Delete</cite>
            </figcaption>
        </figure>

        <a href="Form-add-book.php" class="btn btn-success">Add Book</a>

        <!-- table data -->
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $num = 1;
                while($row = mysqli_fetch_array($sql)){ 
              ?>
                <tr>
                  <td><?=$num; ?></td>
                  <td><?=$row['KodeBuku']; ?></td>
                  <td><?=$row['JudulBuku']; ?></td>
                  <td><?=$row['Penulis']; ?></td>
                  <td><?=$row['Penerbit']; ?></td>
                  <td><?=$row['TahunTerbit']; ?></td>
                  <td>
                    <a href="Form-edit-book.php?id=<?=$row['KodeBuku'];?>" class="btn btn-primary btn-sm">
                      Edit
                    </a> 
                    <a href="delete-book.php?id=<?=$row['KodeBuku'];?>" class="btn btn-danger btn-sm">
                      Delete
                    </a>
                  </td>
                </tr>
                <?php
                $num++; }
              ?>
            </tbody>
          </table>

        </div>
        
</body>
</html>