<?php
if (isset($_GET)) {
    $db  = new mysqli("localhost", "root", "", "discoteca");

    $query = "Select * from disco where ID_disc = {$_GET['ID_disc']}";

    $resultado = $db->query($query);

    $livro = $resultado->fetch_array();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar disco</title>
</head>
<body>
    <h1>Edite Disco já criado!</h1>
    <form method='post' action='editDisco.php'>
        <label for=Titulo_disc>Título</label>
        <?php
            echo "<input type=text id=titulo required name=titulo value='{$disc['Titulo_disc']}'>";
        ?>
        <br>
        <label for=Ano>Ano</label>
        <?php
            echo "<input type=number id=ano required name=ano value={$disc['Ano']}>";
        ?>
        <br>
        <label for=Artista>Artista</label>
        <?php
            echo "<input type=text id=autor required name=autor value={$disc['Artista']}>";
        ?>      
        <br>
        <label for=Capa>Capa</label>
        <?php
            echo "<input type=text id=capa required name=capa value={$disc['Capa']}>";
        ?>   
        <br>
        <?php
            echo "<input type=hidden id=idlivro required name=idlivro value={$disc['ID_disc']}>";
        ?> 
        <input type=submit name=botao value='Editar'>
    </form>
</body>
</html>