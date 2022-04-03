<?php
include 'koneksi.php';
$id = $_GET['id'];
// echo "$id"; 

$delete = "DELETE FROM tbl_125 WHERE KodeBuku = $id";
$sql = mysqli_query($koneksi, $delete);
if($sql){
    header('location: book.php');
}
else{
    echo "Anda GAGAL!";
}
?>