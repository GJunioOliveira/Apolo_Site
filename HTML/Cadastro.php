<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bd_site";

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
    $sql = "INSERT INTO clientes (nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    // Fechar a conexão
    $conn->close();
}
?>