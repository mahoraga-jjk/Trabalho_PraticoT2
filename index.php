<?php

// Conexão com o banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");

// Query para obter todos os discos
$query = "SELECT * FROM disco";
$discos = $db->query($query);

// HTML e estrutura da página
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discoteca</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <img src="logo.png" alt="Logo">
        <h1>Música Gratuita de Qualidade</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Artista</th>
                <th>Ano</th>
                <th>Capa</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discos as $disco): ?>
                <tr>
                    <td><?php echo $disco['Titulo_disc']; ?></td>
                    <td><?php echo $disco['Artista']; ?></td>
                    <td><?php echo $disco['Ano']; ?></td>
                    <td><img src="<?php echo $disco['Capa']; ?>" alt="Capa" class="capa"></td>
                    <td>
                        <a href="delDisco.php?ID_disc=<?php echo $disco['ID_disc']; ?>">
                            <img src="icon-trash.png" alt="Deletar" class="icon">
                        </a>
                        <a href="form_edit.php?ID_disc=<?php echo $disco['ID_disc']; ?>">
                            <img src="icon-edit.png" alt="Editar" class="icon">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="add-disco">
        <a href="form_add.php"><img src="icon-add.png" alt="Adicionar Novo" class="icon"></a>
    </div>

</body>
</html>
