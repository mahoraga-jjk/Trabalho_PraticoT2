<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Artista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Adicione novo Artista!</h1>
    <form method='post' action='addArt.php'>
        <label for="Nome_Art">Nome</label>
        <input type="text" id="Nome_Art" required name="Nome_Art">
        <br>
        <input type="submit" name="botao" value="Adicionar">
    </form>
</body>
</html>