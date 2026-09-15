<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da idade</title>
</head>
<body>
     <form method="post" action="">
        <!-- Campo Nome -->
        <label for="nome">Nome:      </label>
        <input type="text" name="nome" required>

        <!-- Campo Ano de Nascimento -->
        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" name="ano_nascimento" required><br><br>

        <br><br>
        <!-- Botão de Envio -->
        <button type="submit">Calcular</button>
    </form>
    

     <!-- Lógica de cadastro e cálculo (PHP) -->
    <?php
    // Se o usuário eviou (formulário) eu capturo os valores
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Recebo os valores
        $nome = $_POST['nome'];
        $ano_nascimento = $_POST['ano_nascimento'];

        // Calcula a idade
        $idade = date('Y') - $ano_nascimento;

         if ($idade >= 18) {
            echo "<p>Acesso permitido, $nome! Você tem $idade anos.</p>";

            // Gravando a informação recebida em um arquivo de texto
            $arquivo = fopen('nome_ano.txt', 'a');

            //Cria uma linha com o nome e senha separados por;
            $linha = "Nome: $nome, Idade: $idade\n";

            //Escreve a linha no arquivo (insere de fato)
            fwrite($arquivo, $linha);
            fclose($arquivo);

            //Fecha o arquivo
            fclose($arquivo);
         } else {
        
         echo "<p> Acesso negado, $nome! Você tem $idade anos e é menor de idade.</p>";
        

        //Redireciona para a própria página após o cadastro
        echo '<meta http-equiv="refresh" content="5;url=' . $_SERVER['PHP_SELF'] . '">';
         }
 }
    ?>

</body>
</html>
