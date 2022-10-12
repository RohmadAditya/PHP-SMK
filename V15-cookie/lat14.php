<?php 

    // nama
    $cookie_name = 'user';
    // isi
    $cookie_value = 'adit';

    setcookie($cookie_name, $cookie_value);


    // memanggil value harus dengan nama
    echo $_COOKIE[$cookie_name];

    // hitung mundur cookie expired
    setcookie("user" , "" , time() - 60);

    echo '<br>';

    // cek cookie
    var_dump($_COOKIE);

?>