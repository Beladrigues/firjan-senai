<?php
$host = "localhost";
$user = "Bela";  // Usuário do MySQL
$pass = "654321";      // Senha do MySQL
$dbname = "escola";  // Nome do banco de dados
$port = "3307";

$conn = new mysqli($host,$user,$pass,$dbname,3307);

// Verifica se há erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>