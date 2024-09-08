<?php

    if(isset($_POST)){
        
        $db = new mysqli("localhost", "root", "", "discoteca"); //<---Conexão com o banco de dados
    
        
        $query = "update artista set Nome_Art = '{$_POST['Nome_Art']}' where ID_Art = {$_POST['ID_Art']}"; //<---Query de consulta

        $resultado = $db->query($query); //<--- Executa a consulta e armazena o resultado

        header("location:index.php");
    }

?>