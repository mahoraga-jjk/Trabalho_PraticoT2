<?php
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $artist_id = $_POST['artist_id'];
    $year = $_POST['year'];
    $cover = $_POST['cover'];

    addDisc($title, $artist_id, $year, $cover);
    header('Location: list_discs.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Disco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<<<<<<< HEAD
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
=======
    <h1>Adicionar Novo Disco</h1>
    <form method="POST" action="">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="artist_id">Artista:</label>
        <select id="artist_id" name="artist_id" required>
            <!-- Aqui você deve carregar os artistas do banco de dados -->
        </select><br>

        <label for="year">Ano:</label>
        <input type="number" id="year" name="year" required><br>

        <label for="cover">Foto da Capa:</label>
        <input type="text" id="cover" name="cover"><br>

        <button type="submit">Adicionar Disco</button>
    </form>
>>>>>>> parent of 3a7dfac (1.2)
</body>
</html>
