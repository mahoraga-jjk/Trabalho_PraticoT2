<?php
// Verifica se um ID foi passado via GET
if (isset($_GET['ID_disc'])) {
    $db  = new mysqli("localhost", "root", "", "discoteca");

    // Query para buscar os dados do disco
    $query = "SELECT * FROM disco WHERE ID_disc = {$_GET['ID_disc']}";
    $resultado = $db->query($query);

    // Fetch dos dados do disco
    $disc = $resultado->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Disco</h1>
        <form method="post" action="editDisco.php">
            <label for="titulo">Título do Disco</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $disc['Titulo_disc']; ?>" required>
            <br>

            <label for="ano">Ano de Lançamento</label>
            <input type="number" id="ano" name="ano" value="<?php echo $disc['Ano']; ?>" required>
            <br>

            <label for="autor">Artista</label>
            <input type="text" id="autor" name="autor" value="<?php echo $disc['Artista']; ?>" required>
            <br>

            <label for="capa">URL da Capa</label>
            <input type="text" id="capa" name="capa" value="<?php echo $disc['Capa']; ?>" required>
            <br>

            <input type="hidden" name="idlivro" value="<?php echo $disc['ID_disc']; ?>">
            <input type="submit" value="Salvar Alterações">
        </form>
    </div>
</body>
</html>
