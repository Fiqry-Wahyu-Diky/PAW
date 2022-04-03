<?php
    include "koneksi.php";
    $judul = $_POST['JudulBuku'];
    $penulis = $_POST['Penulis'];
    $penerbit = $_POST['Penerbit'];
    $tahun = $_POST['TahunTerbit'];

    $sql = "INSERT INTO tbl_125 VALUES(null,'$judul','$penulis','$penerbit','$tahun')";
    $hasil =mysqli_query($koneksi, $sql);
    echo header("location: book.php")
?>