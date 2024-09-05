<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Disco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Adicionar Novo Disco</h1>
        <form method="post" action="addDisco.php">
            <label for="titulo">Título do Disco</label>
            <input type="text" id="titulo" name="titulo" required>
            <br>
            
            <label for="ano">Ano de Lançamento</label>
            <input type="number" id="ano" name="ano" required>
            <br>
            
            <label for="autor">Artista</label>
            <input type="text" id="autor" name="autor" required>
            <br>
            
            <label for="capa">URL da Capa</label>
            <input type="text" id="capa" name="capa" required>
            <br>
            
            <input type="submit" value="Adicionar Disco">
        </form>
    </div>
</body>
</html>
