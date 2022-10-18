<?php
$connection = pg_connect("host=localhost dbname=HEARTSEED user=postgres password=123");
$querySignUp = "INSERT INTO mydb.heartseed_user (name, lastname, email, phone_number, date_of_birth, profile_picture, occupation, bio, password) VALUES('$_REQUEST[name]', '$_REQUEST[lastname]', '$_REQUEST[email]', '$_REQUEST[phone_number]', '$_REQUEST[date_of_birth]', '$_REQUEST[profile_picture]', '$_REQUEST[occupation]', '$_REQUEST[bio]', '$_REQUEST[password]')";
$consulta = pg_query($connection, $querySignUp);
echo 'Se ha registrado el usuario exitosamente.'
?>