<?php
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}
// Inserir o disco na tabela `artista`
$query = $db->prepare("INSERT INTO artista (Nome_Art) VALUES (?)");
$query->bind_param("s", $_POST['Nome_Art']);

if (!$query->execute()) {
    die("Erro ao executar a consulta: " . $query->error);
}

header("Location: artIndex.php");
exit();
?>