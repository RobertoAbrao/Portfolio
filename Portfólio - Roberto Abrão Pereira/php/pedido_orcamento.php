<?php

include 'conexao.php';


$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO pedido_orcamento (name, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Mensagem enviada com Sucesso!!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

header('Location: ../index.html');

// Fechando a conexão
$conn->close();
?>