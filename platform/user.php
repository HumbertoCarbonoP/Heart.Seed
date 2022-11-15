<?php
require 'connection.php';
// require 'main-wall.php';
$id_user = $_GET['id_user'];
$query = "SELECT * FROM mydb.heartseed_user WHERE id_user = $id_user";

$consulta = pg_query($connection, $query);
$obj = pg_fetch_object($consulta);
$name = $obj->name;
$lastname = $obj->lastname;
$profile_picture = $obj->profile_picture;
$occupation = $obj->occupation;
$bio = $obj->bio;
?>