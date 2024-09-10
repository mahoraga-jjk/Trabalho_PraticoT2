<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if (isset($_GET)) {
    $db  = new mysqli("localhost", "root", "", "discoteca");

    $query = "Select * from emprestimo join disco on emprestimo.ID_disc_emp = disco.ID_disc where ID_disc_emp = {$_GET['ID_disc_emp']}";

    $resultado = $db->query($query);

    $emp = $resultado->fetch_array();
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
        <label for=nome>Nome</label>
        <?php
            echo "<input type=text id=nome required name=nome value='{$emp['nome']}'>";
        ?>
        <br>
        <label for=data>Data</label>
        <?php
            echo "<input type=time id=data required name=data value={$emp['data']}>";
        ?>
        <br>
        <label for=email>E-mail</label>
        <?php
            echo "<input type=text id=email required name=email value={$emp['email']}>";
        ?>      
        <br>
      
        <br>
        <input type=submit name=botao value='Editar'>
    </form>
</body>
</html>