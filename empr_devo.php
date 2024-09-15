<link rel="stylesheet" type="text/css" href="style.css" />
<?php 
if (isset($_GET['ID_disc'])) {
    // Conectando ao banco de dados
    $db = new mysqli("localhost", "root", "", "discoteca");
    if ($db->connect_error) {
        die("Erro de conexão: " . $db->connect_error);
    }

    // Consulta apenas a tabela disco para obter informações do disco a ser emprestado
    $query = $db->prepare("SELECT * FROM disco WHERE ID_disc = ?");
    $query->bind_param("i", $_GET['ID_disc']);
    $query->execute();
    
    // Obtendo o resultado
    $resultado = $query->get_result();
    if ($resultado->num_rows > 0) {
        $disco = $resultado->fetch_array(); // Guarda as informações do disco
    } else {
        echo "Nenhum disco encontrado com esse ID.";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empréstimo</title>
</head>
<body>
    <h1>Registrar Empréstimo</h1>

        <form action="emprestimo.php" method="post" class="form">

<!-- Para conseguir enviar o id para o emprestar -->
<input type="hidden" id="ID_disc" name="ID_disc" value="<?= $_GET['ID_disc'] ?>">

<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" required>

<label for="email">E-mail:</label>
<input type="email" id="email" name="email" required>

<label for="data_dev">Data de devolução:</label>
<input type="date" id="data_dev" name="data_dev">

<input type="submit" name="botao" value="Registrar Empréstimo">
    </form>
</body>
</html>
