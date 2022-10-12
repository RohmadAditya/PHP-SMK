<?php 

    $tanggal = 30;

    // if dua kondisi
    // if ($tanggal < 32) {
    //     if ($tanggal > 0) {
    //         echo 'benar';
    //     }
    //     else {
    //         echo 'salah';
    //     }
    // }
    // else {
    //     echo 'salah';
    // }

    $nilai = 75;

    // if ($nilai <= 100) {
    //     if ($nilai >= 0) {
    //         echo 'Nilai Benar';
    //     }else {
    //         echo 'Nilai Salah';
    //     }
    // }else {echo 'salah';}

    // pengujian menggunakan && (and)
    // if ($nilai >= 0 && $nilai <= 100) {
    //     echo 'Nilai Benar';
    // } else {
    //     echo 'Nilai Salah';
    // }

    // pengujian menggunakan || (or)
    if ($nilai >= 100 || $nilai <= 0) {
        echo 'Nilai Salah';
    } else {
        echo 'Nilai Benar';
    }
?>