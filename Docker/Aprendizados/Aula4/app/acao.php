<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="stylephp.css">
</head>
<body>
<div class="resultado">

<?php
// Conexão com o banco
$host = 'db';
$user = 'root';
$pass = '1234';
$db   = 'meubanco';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro ao conectar: " . $conn->connect_error);
}

// Cria tabela se não existir
$conn->query("CREATE TABLE IF NOT EXISTS pessoas (
    id    INT AUTO_INCREMENT PRIMARY KEY,
    nome  VARCHAR(100),
    idade INT
)");

// Pega e salva os dados do formulário
$nome  = $conn->real_escape_string($_POST["nome"]);
$idade = $conn->real_escape_string($_POST["idade"]);

$conn->query("INSERT INTO pessoas (nome, idade) VALUES ('$nome', '$idade')");

// Exibe resultado
echo "Oi, <strong>$nome</strong>! Você tem <strong>$idade</strong> anos.<br><br>";
echo "✅ Dados salvos no banco!";

$conn->close();
?>

</div>
</body>
</html>
