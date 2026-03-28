<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Alunos</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f4f4f4; }
        .menu-container { width: 600px; text-align: center; }
        
        /* Título Principal */
        .titulo { background-color: #009688; color: white; padding: 15px; border-radius: 8px 8px 0 0; font-size: 24px; margin-bottom: 5px; }
        
        /* Área dos Botões */
        .botoes { display: flex; gap: 5px; }
        .btn { flex: 1; background-color: #009688; color: white; padding: 40px; text-decoration: none; font-size: 20px; border-radius: 0 0 8px 8px; transition: 0.3s; }
        
        /* Efeito ao passar o mouse */
        .btn:hover { background-color: #00796b; }
        
        /* Se quiser que o botão da esquerda e direita tenham cantos arredondados específicos */
        .btn-left { border-bottom-right-radius: 0; }
        .btn-right { border-bottom-left-radius: 0; }
    </style>
</head>
<body>

<div class="menu-container">
    <div class="titulo">Projeto Alunos Concluintes</div>
    <div class="botoes">
        <a href="cadastrar.php" class="btn btn-left">Adicionar</a>
        <a href="listar_alunos.php" class="btn btn-right">Listar</a>
    </div>
</div>

</body>
</html>