<?php

$db = new mysqli("localhost","root","","discoteca");

$query = "delete from disco where ID_disc = {$_GET['ID_disc']}";

$db->query($query);

header("location:index.php");

?>