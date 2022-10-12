<!-- upload-file -->
<form action="" method="post" enctype="multipart/form-data">

    pilih gambar :

    <input type="file" name="upload">
    <input type="submit" name="kirim">

</form>

<?php 

    if (isset($_POST['kirim'])) {
        
        $files = $_FILES['upload'];

        foreach ($files as $key => $value) {
            echo $key. ' = ' .$value;
            echo '<br>';
        }
        echo '<br>';
        
        // menampilkan nama hasil upload
        $name = $_FILES['upload']['name'];
        // menampilkan lokasi file
        $temp = $_FILES['upload']['tmp_name'];

        echo $name.' '.$temp;

        // memindahkan lokasi file ke folder gambar
        move_uploaded_file($temp, 'gambar/'.$name);


        
        

    }




?>