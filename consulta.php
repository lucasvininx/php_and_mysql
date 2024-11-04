<?php
session_start();
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Registros</title>
</head>
<body>
    <h1>Clientes Cadastrados</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM clientes");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["email"]."</td><td>".$row["telefone"]."</td></tr>";
        }
        ?>
    </table>

    <h1>Produtos Cadastrados</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produtos");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["preco"]."</td><td>".$row["quantidade"]."</td></tr>";
        }
        ?>
    </table>
</body>
</html>