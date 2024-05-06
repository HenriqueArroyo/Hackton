<?php
// Configurações do banco de dados
$endereco = 'localhost';
$banco = 'postgres';
$usuario = 'postgres';
$senha = 'postgres';

try {
    // Conexão com o banco de dados
    $pdo = new PDO(
        "pgsql:host=$endereco;port=5432;dbname=$banco",
        $usuario,
        $senha,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Criação da tabela cliente
    $sql_cliente = "CREATE TABLE IF NOT EXISTS cliente (
        nome VARCHAR(255) NOT NULL,
        usuario VARCHAR(255) NOT NULL,
        dataNascimento DATE NOT NULL,
        email VARCHAR(255) UNIQUE PRIMARY KEY NOT NULL,
        senha VARCHAR(255) NOT NULL
    )";

    $pdo->exec($sql_cliente);


    echo "Tabelas criadas com sucesso!";
} catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados. <br/>";
    die($e->getMessage());
}
?>

