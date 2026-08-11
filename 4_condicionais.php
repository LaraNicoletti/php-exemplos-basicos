<?php

// Verifica se o formulário foi enviado
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];

    // Verifica se a senha bate
    if ($senha == "12345") {
        header("Location: 4b_bem_vindo.php");
    }else {
        //Mensagem de erro
        $erro = "Senha incorreta. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>Página de Login</title>
<head>
<html>
    <body>
        <h2>Digite sua senha</h2>
        <form   action="" method="POST">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <button type="submit">Entrar</button>
        </form>

        <?php
        // Exibe a mensagem de erro, se houver
        if (isset($erro)) {
            echo "<p style='color: red;'>$erro</p>";
        }
        ?>
</body>
