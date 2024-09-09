<link rel="stylesheet" type="text/css" href="style.css" />
<?php

// Conectar ao banco de dados
$db = new mysqli("localhost", "root", "", "discoteca");

if ($db->connect_error) {
    die("Erro de conexão: " . $db->connect_error);
}
echo "<h1>Artistas</h1>";

echo "<a href='index.php'>Ir para Discoteca</a>";

echo "<br>";

echo "<a href='form_addArt.php'>Adicionar Novo Artista</a>";

// Consulta para buscar todos os discos
$query = "SELECT artista.Nome_Art, artista.ID_Art 
        FROM artista";
$result = $db->query($query);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>Nome do artista</th>
            <th>Ações</th>
        </tr>";

            // Loop para exibir cada disco
    while ($art = $result->fetch_assoc()) {
        echo "<td>{$art['Nome_Art']}</td>";
        echo "<td>
                <a href='delArt.php?ID_Art={$art['ID_Art']}'>Apagar Artista</a> | 
                <a href='form_editArt.php?ID_Art={$art['ID_Art']}'>Editar Artista</a>
            </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nenhum artista encontrado.";
}

$db->close();

?>