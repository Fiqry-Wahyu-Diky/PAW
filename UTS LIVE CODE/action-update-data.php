<?php
    include "koneksi.php";
    $id = $_POST['id_data'];
    $nama = $_POST['nama_data'];
    $email = $_POST['email_data'];

    $update = "UPDATE tb_125 SET  nama_125='$nama', email_125 = '$email' WHERE id_125 = $id";
    $hasil = mysqli_query($koneksi,$update);
    header ('location:data.php');

?>