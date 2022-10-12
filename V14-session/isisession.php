


<?php 

session_start();

echo $_SESSION['user'];
echo '<br><br>';
echo $_SESSION['nama'];
echo '<br><br>';
echo $_SESSION['alamat'];
echo '<br><br>';
foreach ($_SESSION as $key => $value) {
    echo $key.' => '.$value.'<br><br>';
}

?>