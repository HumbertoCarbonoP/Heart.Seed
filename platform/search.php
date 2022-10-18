<?php
$connection = pg_connect("host=localhost dbname=HEARTSEED user=postgres password=123");
$querySearch = "SELECT * FROM mydb.heartseed_post WHERE title ILIKE '%$_REQUEST[query]%';"??'';
$consulta = pg_query($connection, $querySearch);
?>