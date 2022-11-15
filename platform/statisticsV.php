<?php
require 'connection.php';
$queryNumberUsers = "SELECT id_user FROM mydb.heartseed_user;";
$consultaUsers = pg_query($connection, $queryNumberUsers);
$queryNumberEvents = "SELECT id_post FROM mydb.heartseed_post;";
$consultaEvents = pg_query($connection, $queryNumberEvents);
$queryNumberEventsAnimalism = "SELECT id_post FROM mydb.heartseed_post WHERE kind = 'Animalista';";
$consultaEventsAnimalism = pg_query($connection, $queryNumberEventsAnimalism);
$queryNumberEventsEcology = "SELECT id_post FROM mydb.heartseed_post WHERE kind = 'Ecológico';";
$consultaEventsEcology = pg_query($connection, $queryNumberEventsEcology);
$queryNumberEventsSocialJustice = "SELECT id_post FROM mydb.heartseed_post WHERE kind = 'Justicia Social';";
$consultaEventsSocialJustice = pg_query($connection, $queryNumberEventsSocialJustice);
$queryNumberEventsEducation = "SELECT id_post FROM mydb.heartseed_post WHERE kind = 'Educación';";
$consultaEventsEducation = pg_query($connection, $queryNumberEventsEducation);
$queryAge = "SELECT AVG(age) FROM mydb.heartseed_user;";
$consultaAge = pg_query($connection, $queryAge);

$numberUsers = pg_num_rows($consultaUsers);
$numberEvents = pg_num_rows($consultaEvents);
$animalism = (pg_num_rows($consultaEventsAnimalism)/$numberEvents)*100;
$ecology = (pg_num_rows($consultaEventsEcology)/$numberEvents)*100;
$socialJustice = (pg_num_rows($consultaEventsSocialJustice)/$numberEvents)*100;
$education = (pg_num_rows($consultaEventsEducation)/$numberEvents)*100;
$age = pg_fetch_assoc($consultaAge);
$occupation = 'Estudiante';
?>