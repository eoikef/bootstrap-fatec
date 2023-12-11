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
$nome = $_POST['cadastro-form-name'];
$senha = sha1($_POST['cadastro-senha']);
$email = $_POST['cadastro-email'];
$celular = $_POST['cadastro-celular'];

$marca = $_POST['marca-carro'];
$modelo = $_POST['modelo-carro'];
$placa = $_POST['placa-carro-principal'];

// fazer a query no banco
$sql = "INSERT INTO cadastro (nome, email, celular, senha, marca, modelo, placa) VALUES ('$nome', '$email', '$celular', '$senha', '$marca', '$modelo', '$placa')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
