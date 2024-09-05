<?php

// Verifica se o formulário foi enviado
if (isset($_POST)) {
    // Conecta ao banco de dados
    $db = new mysqli("localhost", "root", "", "discoteca");

    // Query de atualização dos dados do disco
    $query = "UPDATE disco SET 
        Titulo_disc = '{$_POST['titulo']}', 
        Ano = {$_POST['ano']}, 
        Artista = '{$_POST['autor']}', 
        Capa = '{$_POST['capa']}' 
        WHERE ID_disc = {$_POST['idlivro']}";

    // Executa a query
    $db->query($query);

    // Redireciona para a página principal
    header("Location: index.php");
}
?>
