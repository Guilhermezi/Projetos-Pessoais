<?php
echo "Docker funcionando";
$host = 'db'; // host do banco de dados** (nome do container ou servidor MySQL).
$user = 'root'; // nome user no bd
$pass = '1234'; // senha
$db = 'meubanco'; // nome
$conn = new mysqli($host, $user, $pass, $db); //Cria uma conexão com o banco MySQL usando os dados fornecidos.

if ($conn->connect_error) { //  Ele **verifica se houve erro na conexão**.
    die("Erro: " . $conn->connect_error); // Interrompe a execução e mostra o erro caso a conexão falhe.
}

echo "Conectado ao banco!"; // Mensagem exibida se a conexão for bem-sucedida.
?>
