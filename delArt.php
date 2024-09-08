<?php

$db = new mysqli("localhost","root","","discoteca");

$query = "delete from artista where ID_Art = {$_GET['ID_Art']}";

$db->query($query);

header("location:index.php");

?>