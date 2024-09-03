<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Disco</title>
</head>
<body>
<h1>Adicione novo Disco!</h1>
    <form method='post' action='addDisco.php'>
        <label for=Titulo_disc>Título</label>
        <input type=text id=titulo required name=titulo>
        <br>
        <label for=Ano>Ano</label>
        <input type=number id=ano required name=ano>
        <br>
        <label for=Artista>Artista</label>
        <input type=text id=autor required name=autor>
        <br>
        <label for=Capa>Capa</label>
        <input type=text id=capa required name=capa>      <!--Resolver a questão da adição de imagem...-->
        <br>
        <input type=submit name=botao value='Adicionar'>
    </form>
</body>
</html>