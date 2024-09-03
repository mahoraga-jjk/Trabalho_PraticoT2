<?php

$db = new mysqli("localhost","root","","discoteca");

$query = "select * from disco";

$disco = $db->query($query);
    

echo "<table>";
echo "<tr>
    <td>Título do disco</td>
    <td>Artista</td>
    <td>Ano</td>
    <td>Capa</td>
    <td>Id do disco</td>
    <td>Ação</td>
</tr>";


    foreach($disco as $disc){
    echo"<tr>";
        echo "<td>{$disc['Titulo_disc']}</td>";
        echo "<td>{$disc['Artista']}</td>";
        echo "<td>{$disc['Ano']}</td>";
        echo "<td>{$disc['Capa']}</td>";
        echo "<td>{$disc['ID_disc']}</td>";
        echo "<td><a href='delLivro.php?ID_disc={$disc['ID_disc']}'>Apagar</a>
                <a href='form_editar.php?ID_disc={$disc['ID_disc']}'>Editar</a>
    </td>";
    echo "</tr>";
    
}
echo "</table>";

echo "<a href='form_add.php'>Adicionar novo disco</a>";


?>