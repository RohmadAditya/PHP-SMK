<?php 

    function belajar(){
        echo "Belajar PHP";
    }

    belajar();
 
    echo '<br>';
    echo '<br>';

    // fungsi perkalian
    function perkalian($a = 5,$b = 5){
        $luas = $a * $b;

        echo $luas;
    }
    // menampilkan fungsi perkalian
    perkalian();

    echo '<br>';

    // jika menggunakan return maka harus ada echo untuk menampilkan hasil
    function luas($c=3,$d=5){
        $Luas = $c * $d;
        return $Luas;
    }
    echo luas() * 5;
    
    echo '<br>';

    function output(){
        return 'PHP';
    }

    echo output();
?>