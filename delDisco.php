<?php

// Conexão com o banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");

// Query para deletar o disco
$query = "DELETE FROM disco WHERE ID_disc = {$_GET['ID_disc']}";

// Executa a query
$db->query($query);

// Redireciona para a página principal
header("Location: index.php");
?>
