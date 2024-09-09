<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if (isset($_GET)) {
    $db  = new mysqli("localhost", "root", "", "discoteca");

    $query = "Select * from disco where ID_disc = {$_GET['ID_disc']}";

    $resultado = $db->query($query);

    $disc = $resultado->fetch_array();
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
    <h1>Quem pegou imprestado?</h1>
    <form method='post' action='emprestimo.php'>
        <label for=Titulo_disc>Título</label>
        <?php
            echo "<input type=text id=Titulo_disc required name=Titulo_disc value='{$disc['Titulo_disc']}'>";
        ?>
        <br>
        <label for=Ano>Ano</label>
        <?php
            echo "<input type=number id=Ano required name=Ano value={$disc['Ano']}>";
        ?>
        <br>
        <label for=Artista>Artista</label>
        <?php
            echo "<input type=text id=Artista required name=Artista value={$disc['Artista']}>";
        ?>      
        <br>
        <label for=Capa>Capa</label>
        <?php
            echo "<input type=text id=Capa required name=Capa value={$disc['Capa']}>";
        ?>   
        <br>
        <?php
            echo "<input type=hidden id=ID_disc required name=ID_disc value={$disc['ID_disc']}>";
        ?> 
        <input type=submit name=botao value='Editar'>
    </form>
</body>
</html>