<?php
$servername = "@ep-purple-poetry-44819183.us-east-2.aws.neon.tech";
$username = "GJunioOliveira";
$password = "************";
$dbname = "bd_site";

// Criar uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
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