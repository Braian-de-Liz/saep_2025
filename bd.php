<?php 
    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "crud";

    $conecao = new mysqli($host, $usuario, $senha, $banco);
    
    // verificar erros de conexão

    if($conecao -> connect_error){
        die("Falha na conexão : " . $conecao -> connect_error);
    }

    $conecao->set_charset("utf8"); 
?>