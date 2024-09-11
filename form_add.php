<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Disco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Adicione novo Disco!</h1>
    <form method='post' action='addDisco.php' enctype="multipart/form-data">
        <label for="Titulo_disc">Título</label>
        <input type="text" id="Titulo_disc" required name="Titulo_disc">
        <br>
        <label for="Ano">Ano</label>
        <input type="number" id="Ano" required name="ano">
        <br>
        <label for="Artista">Artista</label>
<?php
        // Conectar ao banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}

// Consulta para buscar todos os artistas
$query = "SELECT artista.Nome_Art, artista.ID_Art 
        FROM artista";
$result = $db->query($query);

if ($result->num_rows > 0) {
    echo "<select name = 'Nome_Art'>";

            // Loop para exibir cada artistas
    while ($art = $result->fetch_assoc()) {
        echo "<option value={$art['ID_Art']}>{$art['Nome_Art']}</option>";
    }

    echo "</select>";
}
?>


        <br>
        <label for="Capa">Capa</label>
        <input type="file" id="Capa" required name="Capa">
        <br>
        <input type="submit" name="botao" value="Adicionar">
    </form>
</body>
</html>