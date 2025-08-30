<?php 
    require "bd.php";
    session_start();

    if (isset($_SESSION["email"])) {
        header("location:turma.php");
        exit;
    }

    $erro = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["login"])) {
            $email = trim($_POST["email"] ?? "");
            $senha = trim($_POST["senha"] ?? "");

            $stmt = $conecao->prepare("SELECT * FROM professor WHERE email_professor = ?  AND senha_professor");
            $stmt->bind_param("ss", $email, $senha);

            $stmt->execute();

            $resultado = $stmt->get_result();

            if ($resultado -> num_rows === 1) {
                $dados = $resultado->fetch_assoc();

                $_SESSION['email'] = $dados['email_professor'];
                $_SESSION['senha'] = $dados['senha_professor'];

                header("Location: turma.php");
                exit;
            }
            else{
                $erro = "usuário ou senha inválida";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login - SAEP</h2>
    <form action="" method="POST">
        <label for="">email</label>
        <input type="email" name="usuario" required>

        <label for="">Senha</label>
        <input type="passoword" required>

        <button type="submit">Entrar</button>
        <?php 
            if ($erro) {
                echo "<div> $erro </div>";
            }
        ?>
    </form>
</body>
</html>

