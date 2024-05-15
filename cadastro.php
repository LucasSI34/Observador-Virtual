<?php
// Conexão com o banco de dados
$mysqli = new mysqli("localhost:3306", "root", "", "observador");

// Verifica se a conexão foi bem sucedida
if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

// Recebe os dados do formulário
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha

// Insere os dados na tabela usuarios
$sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES ('$username', '$email', '$password')";

if ($mysqli->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $mysqli->error;
}

// Fecha a conexão com o banco de dados
$mysqli->close();
?>
