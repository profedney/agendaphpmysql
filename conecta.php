<?php
// Configurações do banco de dados
$server = "localhost";
$username = "escola";
$password = "123";
$dbname = "escola";

// Conexão com o banco de dados
$conn = new mysqli($server, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>
