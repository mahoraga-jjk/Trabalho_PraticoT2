<?php

// Conexão com o banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");

// Query para inserir o novo disco
$query = "INSERT INTO disco (Titulo_disc, Artista, Ano, Capa) VALUES 
    ('{$_POST['titulo']}', '{$_POST['autor']}', {$_POST['ano']}, '{$_POST['capa']}')";

// Executa a query
$db->query($query);

// Redireciona para a página principal
header("Location: index.php");
?>
