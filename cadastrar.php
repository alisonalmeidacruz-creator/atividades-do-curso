<?php
require_once 'conexao.php'; // Inclui a conexão com o banco de dados

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];

    $sql = "INSERT INTO alunoconcluinte (nome, nota1, nota2, nota3, nota4) VALUES ('$nome', '$nota1', '$nota2', '$nota3', '$nota4')";

    if ($conn->query($sql) === TRUE) {
        $mensagem = "<p style='color: green;'>Aluno cadastrado com sucesso!</p>";
    } else {
        $mensagem = "<p style='color: red;'>Erro: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <!-- Estilos para a página de cadastro -->
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; padding: 20px; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); width: 400px; }
        h2 { background: #009688; color: white; padding: 15px; text-align: center; margin: -20px -20px 20px -20px; border-radius: 8px 8px 0 0; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #009688; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .voltar { display: block; text-align: center; margin-top: 15px; text-decoration: none; color: #666; }
    </style>
</head>
<body>
    <!-- Formulário para cadastrar um novo aluno -->
<div class="card">
    <h2>Novo Aluno</h2>
    <?php echo $mensagem; ?>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" required>
        <input type="number" step="0.1" name="nota1" placeholder="Nota 1" min="0" max="10" required>
        <input type="number" step="0.1" name="nota2" placeholder="Nota 2" min="0" max="10" required>
        <input type="number" step="0.1" name="nota3" placeholder="Nota 3" min="0" max="10" required>
        <input type="number" step="0.1" name="nota4" placeholder="Nota 4" min="0" max="10" required>
        <button type="submit">Salvar Registro</button>
    </form>
    <a href="index.php" class="voltar">← Voltar para o Menu</a>
</div>

</body>
</html>