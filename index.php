<link rel="stylesheet" type="text/css" href="style.css" />
<?php
// Conectar ao banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}
echo "<h1>🎵🎶🎶Discoteca🎶🎶🎵</h1>";

echo "<a href='artIndex.php'>Ir para Artistas</a>";

echo "<br>";

echo "<a href='form_add.php'>Adicionar Novo Disco</a>";

// Consulta para buscar todos os discos
$query = "SELECT disco.Titulo_disc, artista.Nome_Art, disco.Ano, disco.Capa, disco.ID_disc 
        FROM disco 
        INNER JOIN artista ON disco.Artista = artista.ID_Art";
$result = $db->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>Título do Disco</th>
            <th>Artista</th>
            <th>Ano</th>
            <th>Capa</th>
            <th>Ações</th>
        </tr>";

    // Loop para exibir cada disco
    while ($disc = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$disc['Titulo_disc']}</td>";
        echo "<td>{$disc['Nome_Art']}</td>";
        echo "<td>{$disc['Ano']}</td>";
        echo "<td><img src='{$disc['Capa']}'></td>";
        echo "<td>
                <a href='delDisco.php?ID_disc={$disc['ID_disc']}'>Apagar</a> | 
                <a href='form_edit.php?ID_disc={$disc['ID_disc']}'>Editar</a> |
                 <a href='empr_devo.php?'>emp/dev</a>
            </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum disco encontrado.";
}


$db->close();
?>