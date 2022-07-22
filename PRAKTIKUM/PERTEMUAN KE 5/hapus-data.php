<?php
    include "connect.php";
    $id = $_GET['id'];
    $hapus = "DELETE FROM tbl_mahasiswa WHERE No = $id";
    $hasil = mysqli_query($connect,$hapus);
    echo "<script>alert('data telah dihapus');document.location.href='data_mahasiswa.php'</script>";
    // if ($hasil){
    //     echo "berhasil";
    // }
?>