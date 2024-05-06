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


    $pdo->exec("CREATE TABLE IF NOT EXISTS cliente (
        nome VARCHAR(255),
        usuario VARCHAR(255),
        dataNascimento DATE,
        email VARCHAR(255) UNIQUE PRIMARY KEY,
        senha VARCHAR(255)
    )");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $dataNascimento = $_POST['dataNascimento'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "INSERT INTO cliente (nome, usuario, dataNascimento, email, senha) VALUES (:nome, :usuario, :dataNascimento, :email, :senha)";
        $stmt = $pdo->prepare($sql);


        $stmt->execute([
            ':nome' => $nome,
            ':usuario' => $usuario,
            ':dataNascimento' => $dataNascimento,
            ':email' => $email,
            ':senha' => $senha
        ]);


        echo "Usuário cadastrado com sucesso!";
    }
} catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados. <br/>";
    die($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<nav class="navbar">
        <div class="container-fluid">  
            <div class="barra-pesquisa"> 
            <form class="d-flex" role="search">
                <input id="search" class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
            </div> 
          <a href="index.php"><button>Início</button></a>
        </div>
      </nav>
    <div class="formulario">
        <div class="formulario2">
           <center><h3>Crie seu Perfil</h3></center> 
        </div>
        <form action="" method="post">
            <center>
            <input type="text" placeholder="Nome:" name="nome" id="nome"><br>
            <input type="text" placeholder="Usuário:" name="usuario" id="usuario"><br>
            <input type="date" name="dataNascimento" id="dataNascimento"><br>
            <input type="email" placeholder="Email:" name="email" id="email"><br>
            <input type="password" placeholder="Senha:" name="senha" id="senha"><br>
            <input type="password" placeholder="Confirmar Senha:" name="confirmar_senha" id="confirmar_senha"><br>

            <button type="submit">Cadastrar</button>    <br>
            <a href="login.php">Possui cadastro?? Clique Aqui</a>
                </center>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
</html>
