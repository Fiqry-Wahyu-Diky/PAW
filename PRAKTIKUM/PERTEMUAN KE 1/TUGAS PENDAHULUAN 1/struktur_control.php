<?php
    $hari = 'senin';

    if($hari =='senin' or $hari == 'selasa'){
        echo 'baju yang dipakai merah putih';
    }
    elseif($hari == 'rabu' or $hari == 'kamis'){
        echo 'baju yang dipakai batik';
    }
    elseif($hari=='jumat'){
        echo 'baju yang dipakai pramuka';
    }
    else{
        echo 'hari libur';
    }
?>