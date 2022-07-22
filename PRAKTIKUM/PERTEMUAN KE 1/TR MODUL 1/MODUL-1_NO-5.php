<?php
    echo "<h1>Modul I PHP Kondisional</h1>";
    echo "<p>Nama/NRP : Fiqry Wahyu Diky W/200411100125</p>";
    date_default_timezone_set("Asia/Jakarta");


    $Hari = date("D");
    $listHari = array(
        'Sun' => 'Minggu',
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu'
    );

    $Bulan = date("m"); 
    $listBulan = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );

    $Tanggal = date("d");
    $Tahun = date("Y");

    echo "<h3> Sekarang Hari {$listHari[$Hari]} : Tanggal  {$Tanggal} {$listBulan[$Bulan]} {$Tahun} <h3>";
?>