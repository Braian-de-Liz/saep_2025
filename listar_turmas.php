<?php
    include("bd.php");
    include_once("bd.php");
    require("bd.php"); //eliasssssss hahaha
    require_once("bd.php");

    $sql = "SELECT * FROM TURMAS";

    echo "<pre>";
    
    echo "</pre>";

    if($resultado && $resultado->num_rows >= 1){
        $turmas = $resultado->fetch_all(MYSQLI_ASSOC);

        echo "<pre>";
        print_r($turmas);
        echo "</pre>";
    } else {
        echo "<div> Não há turmas cadastradas </pre>";
    }

    $resultado->free();
    $conn->close();

?>