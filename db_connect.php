<?php
$servername = "localhost";
$username = "meu_usuario";
$password = "1234";
$dbname = "cadastro_app";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


$sqlDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlDB) === TRUE) {
    echo "Banco de dados '$dbname' criado com sucesso.<br>";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error . "<br>";
}


$conn->select_db($dbname);


$sqlClientes = "CREATE TABLE IF NOT EXISTS clientes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(20),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


$sqlProdutos = "CREATE TABLE IF NOT EXISTS produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sqlClientes) === TRUE) {
    echo "Tabela 'clientes' criada com sucesso.<br>";
} else {
    echo "Erro ao criar tabela 'clientes': " . $conn->error . "<br>";
}

if ($conn->query($sqlProdutos) === TRUE) {
    echo "Tabela 'produtos' criada com sucesso.<br>";
} else {
    echo "Erro ao criar tabela 'produtos': " . $conn->error . "<br>";
}

?>
