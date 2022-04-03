<?php
    include "koneksi.php";
?>
<html>
    <head>
        <title>tambah buku</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
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
                <p>Tambahkan Buku</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create, Read, Update, and Delete</cite>
            </figcaption>
        </figure>

        <!-- form add book -->
        <form action="add-book.php" method="POST">
    
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">
                    Judul Buku
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="JudulBuku">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="penulis" class="col-sm-2 col-form-label">
                    Penulis Buku
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis" name="Penulis">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">
                    penerbit
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="Penerbit">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tahun" class="col-sm-2 col-form-label">
                    Tahun Terbit
                </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun" name="TahunTerbit">
                </div>
            </div>

            <div class="mb-3 row">
                <button type='submit' class='btn btn-primary' name='kirim' >Add book</button>
            </div>
        </form>
        <!-- <form action="" method="POST">
            Judul Buku : <input type="text" name="judul"><br/>
            Penulis <input type="text" name="penulis"><br>
            Penerbit <input type="text" name="penerbit"><br>
            Tahun Terbit <input type="text" name="tahun"><br>
            <button type="submit" name="submit">kirim</button>
            </form> -->

    </body>
</html>