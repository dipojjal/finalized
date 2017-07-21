<?php

include 'connection.php';

$fo=fopen("Test.json","r");
$fr= fread($fo, filesize("Test.json"));

$array= json_decode($fr,true);
$query="insert into testTable values ('$array[ID]','$array[NAME]')";

$result = pg_query($pg_conn, '$query');

?>
