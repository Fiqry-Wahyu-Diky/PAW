<?php
    $jenis_buah = array('anggur','jeruk','pisang');
    var_dump($jenis_buah);
    echo "<br>panjang array ".count($jenis_buah);

    echo "<br>===============tambah data array=============== <br>";
    $jenis_buah[] = 'manggis';
    var_dump($jenis_buah);
    
    echo "<br>===============hapus data array================<br>";
    unset($jenis_buah[1]);
    var_dump($jenis_buah);

    echo "<br>===============akses data array================<br>";
    echo "data indeks ke-2 $jenis_buah[2] <br>";
    echo "data indeks ke-0 $jenis_buah[0] <br>";


    echo"<br>===============array assosiatif================<br>";
    $makanan = array(
        'nama' => 'soto',
        'harga' => 5000
    );
    var_dump($makanan);
?>