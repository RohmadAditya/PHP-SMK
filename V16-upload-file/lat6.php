<?php 

    // switch case integer
    $hari = 3;
    switch ($hari) {
        case 1:
            echo 'minggu';
            break;
        case 2:
            echo 'senin';
            break;
        case 3:
            echo 'selasa';
            break;
        default:
            echo 'tidak diketahui';
            break;
    }

    echo '<br><br>';

    // switch case string
    $pilihan = 'tambah';
    switch ($pilihan) {
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih ubah';
            break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
        
        default:
            echo 'pilihan belum ada';
            break;
    }

?> 