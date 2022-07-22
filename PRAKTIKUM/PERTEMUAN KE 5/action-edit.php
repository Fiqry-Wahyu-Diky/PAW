<?php
include "connect.php";
$id = $_POST["id"];
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$edit = "UPDATE tbl_mahasiswa SET nrp='$nrp',nama='$nama',email='$email',alamat='$alamat' WHERE No = '$id'";
// var_dump($edit);die;
$hasil = mysqli_query($connect,$edit);
echo "<script>alert('data dirubah');document.location.href='data_mahasiswa.php'</script>";

?>