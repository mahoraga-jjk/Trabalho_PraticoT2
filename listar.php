<link rel="stylesheet" type="text/css" href="style.css" />
<?php
function listarDiscos($orderBy = 'Titulo_disc') {
    // Conecta ao banco de dados
    $db = new mysqli("localhost", "root", "", "discoteca");
    if ($db->connect_error) {
        die("Erro de conexão: " . $db->connect_error);
    }

    // Sanitiza a ordenação
    $allowedOrderBy = ['Titulo_disc', 'Nome_Art', 'Ano', 'Capa'];
    if (!in_array($orderBy, $allowedOrderBy)) {
        $orderBy = 'Titulo_disc'; // Ordem padrão
    }

    // Consulta para buscar discos ordenados
    $query = "
        SELECT disco.Titulo_disc, artista.Nome_Art, disco.Ano, disco.Capa, disco.ID_disc 
        FROM disco 
        INNER JOIN artista ON disco.Artista = artista.ID_Art
        ORDER BY $orderBy
    ";

    $result = $db->query($query);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th><a href='?orderBy=Titulo_disc'>Título</a></th>
                <th><a href='?orderBy=Nome_Art'>Artista</a></th>
                <th><a href='?orderBy=Ano'>Ano</a></th>
                <th><a href='?orderBy=Capa'>Capa</a></th>
                <th>Ações</th>
            </tr>";
        // Loop para cada disco
        while ($disc = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$disc['Titulo_disc']}</td>";
            echo "<td>{$disc['Nome_Art']}</td>";
            echo "<td>{$disc['Ano']}</td>";
            echo "<td><img src='{$disc['Capa']}' width='100'></td>";
            echo "<td>
                    <a href='delDisco.php?ID_disc={$disc['ID_disc']}'>Apagar</a> | 
                    <a href='form_edit.php?ID_disc={$disc['ID_disc']}'>Editar</a>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum disco encontrado.";
    }
    $db->close();
}

listarDiscos($_GET['orderBy'] ?? 'Titulo_disc');
?>
