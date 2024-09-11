<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if (isset($_GET)) {
    $db  = new mysqli("localhost", "root", "", "discoteca");
    $query = "SELECT * FROM emprestimo JOIN disco ON emprestimo.ID_disc = disco.ID_disc WHERE emprestimo.ID_disc = {$_GET['ID_disc']}";
    $resultado = $db->query($query);
    $emp = $resultado->fetch_array();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolução de Disco</title>
</head>
<body>
    <h1>Quem pegou emprestado?</h1>
    <form method='post' action='devolucao.php'>
        <label for=nome>Nome</label>
        <?php
            echo "<input type=text id=nome required name=nome value='{$emp['nome']}' readonly>";
        ?>
        <br>
        <label for=data>Data de Empréstimo</label>
        <?php
            echo "<input type=text id=data required name=data value='{$emp['data']}' readonly>";
        ?>
        <br>
        <label for=data_dev>Data de Devolução</label>
        <input type="date" id="data_dev" required name="data_dev">
        <br>
        <label for=email>E-mail</label>
        <?php
            echo "<input type=text id=email required name=email value='{$emp['email']}' readonly>";
        ?>      
        <br>
        <input type="hidden" name="ID_emp" value="<?= $_GET['ID_emp'] ?>">
        <input type=submit name=botao value='Registrar Devolução'>
    </form>
</body>
</html>
