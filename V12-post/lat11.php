<form action="" method="post">
    Email :
    <input type="email" name="email">
    Password :
    <input type="password" name="password">
    <input type="submit" name="kirim" value="login">


</form>

<?php 

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$email = $_POST['email'];
$password = $_POST['password'];
echo $email;
echo '<br>';
echo $password;

?>
