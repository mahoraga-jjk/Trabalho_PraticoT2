<?php
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}

// Verificar se o artista já existe na tabela `artista`
$artista = $_POST['Artista'];
$verifica_artista = $db->prepare("SELECT ID_Art FROM artista WHERE Nome_Art = ?");
$verifica_artista->bind_param("s", $artista);
$verifica_artista->execute();
$result = $verifica_artista->get_result();

if ($result->num_rows == 0) {
    // Se o artista não existir, inseri-lo na tabela `artista`
    $insere_artista = $db->prepare("INSERT INTO artista (Nome_Art) VALUES (?)");
    $insere_artista->bind_param("s", $artista);
    if (!$insere_artista->execute()) {
        die("Erro ao inserir artista: " . $insere_artista->error);
    }
    // Recuperar o ID do novo artista inserido
    $id_artista = $db->insert_id;
} else {
    // Se o artista já existir, obter o ID dele
    $row = $result->fetch_assoc();
    $id_artista = $row['ID_Art'];
}

// Inserir o disco na tabela `disco`
$query = $db->prepare("INSERT INTO disco (Titulo_disc, Artista, Ano, Capa) VALUES (?, ?, ?, ?)");
$query->bind_param("ssis", $_POST['Titulo_disc'], $id_artista, $_POST['ano'], $_POST['Capa']);

if (!$query->execute()) {
    die("Erro ao executar a consulta: " . $query->error);
}

header("Location: index.php");
exit();
?>