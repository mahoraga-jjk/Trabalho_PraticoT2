<?php
// Conectando ao banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");
if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}

// Verificando se os dados foram enviados corretamente
if (isset($_POST['ID_disc']) && isset($_POST['nome']) && isset($_POST['data_dev']) && isset($_POST['email'])) {
    // Preparando a consulta SQL para inserir o novo empréstimo
    $query = $db->prepare("INSERT INTO emprestimo (nome, `data`, email, ID_disc) VALUES (?, ?, ?, ?)");
    $query->bind_param("sssi", $_POST['nome'], $_POST['data_dev'], $_POST['email'], $_POST['ID_disc']);

    // Executando a consulta e verificando se houve sucesso
    if ($query->execute()) {
        header("Location: index.php"); // Redireciona para a página inicial após o sucesso
        exit();
    } else {
        die("Erro ao executar a consulta: " . $query->error);
    }
} else {
    die("Erro: Dados incompletos no formulário.");
}
?>