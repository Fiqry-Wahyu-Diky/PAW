<?php
    include "connect.php";
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $add = "INSERT INTO tbl_mahasiswa VALUES (null,'$nrp','$nama','$email','$alamat')";
    $hasil = mysqli_query($connect,$add);
    echo "<script>alert('data telah ditambahkan'); document.location.href='data_mahasiswa.php'</script>"

?>