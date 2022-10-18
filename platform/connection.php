<?php
$connection = pg_connect("host=localhost dbname=HEARTSEED user=postgres password=123");
$queryBBC = "SELECT * FROM mydb.heartseed_news WHERE id_news < 5;";
$consultaBBC = pg_query($connection, $queryBBC);
$queryNatGeo = "SELECT * FROM mydb.heartseed_news WHERE id_news > 4 AND id_news < 9;";
$consultaNatGeo = pg_query($connection, $queryNatGeo);
$queryecoNews = "SELECT * FROM mydb.heartseed_news WHERE id_news > 8;";
$consultaecoNews = pg_query($connection, $queryecoNews);
?>