<?php
// Configurações do banco de dados
$servidor = "localhost";
$usuario = "escola";
$senha = "123";
$nomedodb = "escola";

// Conexão com o banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $nomedodb);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

?>
