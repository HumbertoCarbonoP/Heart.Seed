<?php
require 'connection.php';

session_start();

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];


$query = ("SELECT * FROM mydb.heartseed_user WHERE email = '$username' AND password = '$password';");


$consulta = pg_query($connection, $query);
$valid = pg_num_rows($consulta);

if ($valid>0){
    $obj = pg_fetch_object($consulta);
    $_SESSION['id_user'] = $obj->id_user;
    header('Location:main-wall.php');
}
else{
    echo 'Usuario o contraseña inválidos.';
    echo $username;
    echo $password;
}
?>