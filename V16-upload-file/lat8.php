<?php 
// array dimensi
$nama = array('yoga','adit','satria','yogis',100,2.5);

// melihat isi dan typedata array
var_dump($nama);

echo '<br><br>';

// menampilkan array
echo $nama[2];

echo '<br><br>';

// menampilkan array menggunakan for
for ($i=0; $i <= 5 ; $i++) { 
    echo $nama[$i] . ',';
}
echo '<br><br>';

// menampilkan array menggunakan foreach
foreach ($nama as $key) {
    echo $key . ',';
}

echo '<br><br>';

// array asosiatif || berpasangan
$nama = array(
    // key  => values
    'yoga'  => 'palembang',
    'adit'  => 'surabaya',
    'satria'=> 'sidoarjo',
    'yogis' => 'solo'
);

// cara penulisan yang sama seperti array diatas
// $nama['yoga']  ='palembang';
// $nama['adit']  ='surabaya';
// $nama['satria']='sidoarjo';
// $nama['yogis'] ='solo';

// melihat isi dan typedata array
var_dump($nama);

echo '<br><br>';

// menampilkan array
echo $nama['adit'];

echo '<br><br>';

// menampilkan array asosiatif dengan foreach
foreach ($nama as $key => $value) {
    echo $key . ' => ' .$value;
    echo '<br>';
}
?>