<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if (isset($_GET)) {
    $db  = new mysqli("localhost", "root", "", "discoteca");

    $query = "Select * from artista where ID_Art = {$_GET['ID_Art']}";

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
    <h1>Edite Artista já criado!</h1>
    <form method='post' action='editArt.php'>
        <label for=Nome_Art>Nome</label>
        <?php
            echo "<input type=text id=Nome_Art required name=Nome_Art value='{$art['Nome_Art']}'>";
        ?>
        <?php
            echo "<input type=hidden id=ID_Art required name=ID_Art value={$art['ID_Art']}>";
        ?> 
        <input type=submit name=botao value='Editar'>
    </form>
</body>
</html>