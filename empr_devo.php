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
    <form method="post" action="emprestimo.php">
        <label for="Titulo_disc">Disco</label>
        <input type="text" id="Titulo_disc" name="Titulo_disc" value="<?= $disc['Titulo_disc'] ?>" readonly>
        <br>
        
        <label for="nome">Nome</label>
        <input type="text" id="nome" required name="nome">
        <br>
        
        <label for="data_dev">Data de Devolução</label>
        <input type="date" id="data_dev" required name="data_dev">
        <br>
        
        <label for="email">E-mail</label>
        <input type="email" id="email" required name="email">
        <br>

        <!-- Enviando o ID do disco como campo oculto -->
        <input type="hidden" name="ID_disc" value="<?= $_GET['ID_disc'] ?>">
        <input type="submit" name="botao" value="Registrar Empréstimo">
    </form>
</body>
</html>
