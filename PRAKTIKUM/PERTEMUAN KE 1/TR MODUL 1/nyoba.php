<?php
    date_default_timezone_set("Asia/Jakarta");

    echo "<h1>Modul 4 PHP Kondisional</h1>";
    echo "<p>Nama/NRP : Fiqry Wahyu Diky W/200411100125</p>";
    
    $day = date('D');
    switch($day){
        case 'Sun':
            $day = 'Minggu';
            break;
        case 'Mon':
            $day = 'Senin';
            break;
        case 'Tue':
            $day = "Selasa";
            break;
        case 'Wed':
            $day = 'Rabu';
            break;
        case 'Thu':
            $day = 'Kamis';
            break;
        case 'Fri':
            $day = 'Jumat';
            break;
        case 'Sat':
            $day = 'Sabtu';
            break;
    }

    $bulan = date('n');
    switch ($bulan){
        case '1':
            $bulan = 'Januari';
            break;
        case '2':
            $bulan = 'Februari';
            break;
        case '3':
            $bulan = 'Maret';
            break;
        case '4':
            $bulan = 'April';
            break;
        case '5':
            $bulan = 'Mei';
            break;
        case '6':
            $bulan = 'Juni';
            break;
        case '7':
            $bulan = 'Juli';
            break;
        case '8':
            $bulan = 'Agustus';
            break;
        case '9':
            $bulan = 'September';
            break;
        case '10':
            $bulan = 'Oktober';
            break;
        case '11':
            $bulan = 'November';
            break;
        case '12':
            $bulan = 'Desember';
            break;
    }

    $tanggal = date('d');
    $tahun = date('Y'); 

    echo "<h2> Sekarang Hari {$day} : Tanggal {$tanggal} {$bulan} {$tahun} <h2>";
    echo "<br>";

    $batas = 1;
    while ($batas <= 5){
        echo "data ke : {$batas} = {$batas} <br>";
        $batas+=1;
    }
?>