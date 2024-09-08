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
    <form method='post' action='addDisco.php'>
        <label for="Titulo_disc">Título</label>
        <input type="text" id="Titulo_disc" required name="Titulo_disc">
        <br>
        <label for="Ano">Ano</label>
        <input type="number" id="Ano" required name="ano">
        <br>
        <label for="Artista">Artista</label>
        <input type="text" id="Artista" required name="Artista">
        <br>
        <label for="Capa">Capa</label>
        <input type="text" id="Capa" required name="Capa">
        <br>
        <input type="submit" name="botao" value="Adicionar">
    </form>
</body>
</html>