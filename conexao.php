<?php
// Configurações do banco de dados
$host = "localhost";
$user = "root";   // Usuário padrão do XAMPP/Wamp
$pass = "";       // Senha padrão é vazia
$db   = "pwii";   // Nome do banco que está na sua imagem lá no topo

// Criando a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificando se deu erro
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Ajuste para aceitar acentos do Brasil
$conn->set_charset("utf8");
?>