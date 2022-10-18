<?php
$connection = pg_connect("host=localhost dbname=HEARTSEED user=postgres password=123");
$queryPost = "INSERT INTO mydb.heartseed_post (event_date, event_beginning_hour, event_ending_hour, address, kind, title, content, picture, id_user) VALUES('$_REQUEST[event_date]', '$_REQUEST[event_beginning_hour]', '$_REQUEST[event_ending_hour]', '$_REQUEST[address]', '$_REQUEST[kind]', '$_REQUEST[title]', '$_REQUEST[content]', '$_REQUEST[picture]', 1)";
$consulta = pg_query($connection, $queryPost);
echo 'Se ha registrado el evento exitosamente.'
?>