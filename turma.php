<?php
session_start();
if (!isset($_SESSION["conectado"]) || $_SESSION["conectado"] !== true) {
    header("Location: login.php");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turmas</title>
</head>

<body>
    <h3>Bem-vindo,
        <?php
        // session_start();
        echo $_SESSION["nome_professor"];

        ?>
    </h3>
    <a href="sair.php">
        <input type="button" value="sair" event="sair.php">
    </a>
</body>

</html>