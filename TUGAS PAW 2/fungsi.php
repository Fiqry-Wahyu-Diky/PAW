<!-- <?php
    function sayHello ($nama){
        echo "selamat datang, hallo " . $nama . '<br>';
    }
sayHello ('Fiqry');
sayHello ('Wahyu');
sayHello ('Diky');
sayHello ('Wicaksono');
?> -->

<?php
    function cekBilGanjilGenap ($bilangan){
        if($bilangan%2==0){
            echo $hasil = 'angka' .  $bilangan . " merupakan bilangan genap";
        }
        else{
            echo $hasil =  $bilangan . " merupakan bilangan ganjil";
        }
    return $hasil;
    };

cekBilGanjilGenap (5);
echo '<br>';
cekBilGanjilGenap (10);
?>