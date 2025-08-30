<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "saep_db";

    $conecao = new mysqli($servidor, $usuario, $senha, $banco);
    
    // verificar erros de conexão

    if($conecao -> connect_error){
        die("Falha na conexão : " . $conecao -> connect_error);
    }

    $conecao->set_charset("utf8"); 
?>