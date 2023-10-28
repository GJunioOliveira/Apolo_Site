<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "seu_servidor";
    $username = "seu_usuario";
    $password = "sua_senha";
    $database = "seu_banco_de_dados";

    // Crie uma conexão
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Obtenha os dados do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO sua_tabela (nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>
