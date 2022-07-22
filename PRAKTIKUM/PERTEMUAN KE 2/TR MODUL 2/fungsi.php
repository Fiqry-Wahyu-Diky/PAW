<?php
    echo "<h1>Modul II PHP Fungsi</h1>";
    echo "<p>Nama/NRP : Fiqry Wahyu Diky W/200411100125</p>";

    function penjumlahan($x,$y){
        return $x+$y;
    }

    function perkalian($x,$y){
        return $x*$y;
    }

    function pembagian($x,$y){
        return $x/$y;
    }


echo "<b> Pemanggilan fungsi jumlah() </b> <br>";
echo "Jumlah x + y : " . penjumlahan(8,4)."<br>";
echo "Jumlah x + y : " . penjumlahan(8,8)."<br>";
echo "Jumlah x + y : " . penjumlahan(6,1)."<br>";

echo "<b> Pemanggilan fungsi kali() </b> <br>";
echo "Jumlah x + y : " . perkalian(17,5)."<br>";
echo "Jumlah x + y : " . perkalian(8,8)."<br>";
echo "Jumlah x + y : " . perkalian(6,10)."<br>";

echo "<b> Pemanggilan fungsi bagi() </b> <br>";
echo "Jumlah x + y : " . pembagian(68,100)."<br>";
echo "Jumlah x + y : " . pembagian(8,7)."<br>";
echo "Jumlah x + y : " . pembagian(18,10)."<br>";


?>