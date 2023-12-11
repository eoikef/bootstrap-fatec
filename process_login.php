<?php
// credenciais da Database 
$servername = "xxx"; //substitua pelo seu host
$username = "xxx"; //substitua pelo seu username
$password = "xxx"; //substitua pela sua senha
$dbname = "xxx"; //substitua pelo nome do seu db

// criar conexao
$conn = new mysqli($servername, $username, $password, $dbname);

// checar conexao
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// pegar dados do forms do site
$email = $_POST['cadastro-email'];
$senha = sha1($_POST['cadastro-senha']); 

// fazer a query no banco
$sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "Login feito com sucesso";
    // adicionar aqui a chamada para a tela home logada
} else {
    // login invalido
    echo "Email ou senha errados !";
}

$conn->close();
?>
