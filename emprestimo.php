<?php
// Conectando ao banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");
if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}

    $query = "INSERT INTO emprestimo (nome, email, data_dev, ID_disc) VALUES ('$_POST[nome]', '$_POST[nmail]', '$_POST[data_dev]', '$_POST[ID_disc]')";
    $db->query($query);

    //$query = "UPDATE disco SET Emprestado = 1 WHERE IdDisco = $_POST[IdDisco]"; <-- Uma forma de mostrar se um disco está emprestado ou não (é um boolean)
    //$db->query($query);

    // Executando a consulta e verificando se houve sucesso
        header("Location: index.php"); // Redireciona para a página inicial após o sucesso
        exit();
?>