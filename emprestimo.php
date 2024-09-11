<?php
$db = new mysqli("localhost", "root", "", "discoteca");
if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}

// Inserir um novo empréstimo na tabela 'emprestimo'
$query = $db->prepare("INSERT INTO emprestimo (nome, data, email, ID_disc) VALUES (?, ?, ?, ?)");
$query->bind_param("sssi", $_POST['nome'], $_POST['data'], $_POST['email'], $_POST['ID_disc']);
if (!$query->execute()) {
    die("Erro ao executar a consulta: " . $query->error);
}

header("Location: index.php");
exit();
?>
