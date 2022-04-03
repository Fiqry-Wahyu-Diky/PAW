<?php
    include 'koneksi.php';
    $id = $_POST['KodeBuku'];
    $judul = $_POST['JudulBuku'];
    $penulis = $_POST['Penulis'];
    $penerbit = $_POST['Penerbit'];
    $tahun = $_POST['TahunTerbit'];

    $sql = "UPDATE tbl_125 set JudulBuku = '$judul', Penulis ='$penulis', Penerbit='$penerbit', TahunTerbit='$tahun' where KodeBuku=$id";
    $hasil =mysqli_query($koneksi, $sql);
    if (!$hasil){
        echo "$hasil";
        echo "Eksekusi update data mahasiswa gagal";
    }else{
        echo "Eksekusi update data mahasiswa berhasil<br>";
        echo header("location: book.php");
    }

?>