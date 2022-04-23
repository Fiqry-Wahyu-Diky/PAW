<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $hapus = "DELETE FROM tb_125 WHERE id_125 = $id";
    $hasil = mysqli_query($koneksi,$hapus);
    // if($hasil){
    //     echo 'berhasil';
    // }
    echo "<script>alert('data telah dihapus');document.location.href='data.php'</script>";
    // header ('location:data.php')
?>