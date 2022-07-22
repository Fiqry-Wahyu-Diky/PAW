<?php
    echo "<h1>Variabel lokal dan global</h1>";
    echo "<p>Nama/NRP : Fiqry Wahyu Diky W/200411100125</p>";

    $varGlobal = 8;
    function jumlah(){
        global $varGlobal;
        $varLokal = 4;
        $hasil = $varGlobal+$varLokal;
        echo "varGlobal = ".$varGlobal;
        echo "<br> varLokal = ".$varLokal."<br>";
        echo "hasil dari varGlobal + varLokal : ".$hasil;
    }

    jumlah();
?>