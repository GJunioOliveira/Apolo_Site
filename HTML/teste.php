<?
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];
 $senha = $_POST['senha'];

//  conexão com a database

$conn = new mysqli ('localhost','root','','teste');

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO registro(nome,email,telefone,senha)
    value (?,?,?,?)") ;
    $stmt-> bind_param("ssis",$nome,$email,$telefone,$senha);
    $stmt->execute();
    echo "Registro completo";
    $stmt-> close();
    $stmt-> close();
}

?>