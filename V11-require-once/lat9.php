<?php
// foreach akan sering digunakan pada database

$nama = array('yoga','yogis','adit',125);

var_dump($nama);

echo '<br><br>';

foreach ($nama as $key) {
    echo $key.',';
}

echo '<br><br>';

$nama = array(
    'yoga' => 'palembang',
    'yogis' => 'sidoarjo',
    'adit' => 'surabaya'
);

var_dump($nama);

echo '<br><br>';

foreach ($nama as $key => $value) {
    echo $key. ' = ' .$value.', ';
    echo '<br>';
}



?>