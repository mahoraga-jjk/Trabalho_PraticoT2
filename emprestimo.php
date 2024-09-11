<?php
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}
//
$query = $db->prepare("INSERT INTO emprestimo (nome, data, email, ID_emp) VALUES (?, ?, ?, ?)");
$query->bind_param("sisi", $_POST['nome'], $_POST['data'], $_POST['email'], $_POST['ID_emp']);

if (!$query->execute()) {
    die("Erro ao executar a consulta: " . $query->error);
}

header("Location: index.php");
exit();
?>