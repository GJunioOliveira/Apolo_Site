<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_site";

// Crie uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Consulta de teste
$sql = "SELECT 'Conexão com o banco de dados bem-sucedida' AS message";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo "Mensagem: " . $row["message"];
} else {
    echo "Erro na consulta: " . $conn->error;
}

// Feche a conexão
$conn->close();
?>