<?php

    if(isset($_POST)){
        
        $db = new mysqli("localhost", "root", "", "discoteca"); //<---Conexão com o banco de dados
    
        
        $query = "update disco set Titulo_disc = '{$_POST['Titulo_disc']}', Ano = {$_POST['Ano']} , Artista = '{$_POST['Artista']}' , Capa = '{$_POST['Capa']}' where ID_disc = {$_POST['ID_disc']}"; //<---Query de consulta

        
        $resultado = $db->query($query); //<--- Executa a consulta e armazena o resultado

        header("location:index.php");
    }

?>