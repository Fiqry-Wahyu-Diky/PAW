<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "fiqrydiky";

    $koneksi = mysqli_connect($host, $user, $password, $dbname);

    // cek koneksi
    if(!$koneksi){
        echo "koneksi gagal";
    }
?>