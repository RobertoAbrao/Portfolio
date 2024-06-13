<?php
// Definindo as credenciais do banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}