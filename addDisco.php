<?php
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}


$destino = "Capas/".$_FILES['Capa']['name'];
if(move_uploaded_file($_FILES['Capa']['tmp_name'],$destino)){
    // Inserir o disco na tabela `disco`
    $query = $db->prepare("INSERT INTO disco (Titulo_disc, Artista, Ano, Capa) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssis", $_POST['Titulo_disc'], $_POST['Nome_Art'], $_POST['ano'], $destino);
    
    if (!$query->execute()) {
        die("Erro ao executar a consulta: " . $query->error);
    }
}


header("Location: index.php");
exit();
?>