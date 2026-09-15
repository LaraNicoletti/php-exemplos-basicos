<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form method="post" action="">
        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>
    
        <!-- Campo Senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>

        <!-- Botão de Envio -->
        <button type="submit">Cadastrar</button>

     ☻    </form>
    
     <!-- Lógica de cadastro (PHP) -->
    <?php
    // Se o usuário eviou (formulário) eu capturo os valores
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Recebo os valores
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // Gravando a informação recebida em um arquivo de texto
        // O "forpen" significa (file open ou abrir arquivo) e o 'a' append que significa acrescentar.
        $arquivo = fopen('usuarios.txt', 'a');

        //Cria ums linhs com o nome e senha separados por;
        $linha = $nome . ';' . $senha . "\n";

        //Escreve a linha no arquivo (insere de fato)
        fwrite($arquivo, $linha);

        //Fecha o arquivo
        fclose($arquivo);

        //Redireciona para a própria página após o cadastro
        header("Location: " . $_SERVER['PHP_SELF'] . '?sucesso=1');
        exit;
         }
    if (isset($_GET['sucesso'])) {
        //Mensagem de sucesso (Feedback para o usuário)
        echo "<p>Usuário cadastrado com sucesso!</p>";

    // Atualiza a página após 5 segundos (Força a mensagem a sumir)
        header('Refresh: 5; url=' . $_SERVER['PHP_SELF']);
    }
    ?>

</body>
</html>