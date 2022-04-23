<?php
    include "koneksi.php";

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    
    $tambahData = "INSERT INTO tb_125 VALUES ('null','$nama','$email')";
    $hasil = mysqli_query($koneksi,$tambahData);
    // var_dump($hasil);die;
    header ('location:data.php')

?>