<?php

$db = new mysqli("localhost","root","","discoteca");

$query = "insert into disco (Titulo_disc, Artista, Ano, Capa) values ('{$_POST['Titulo_disc']}','{$_POST['Artista']}',{$_POST['ano']},'{$_POST['Capa']}')";

$db->query($query);

header("location:index.php");

?>