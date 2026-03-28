<?php
require_once 'conexao.php';

$busca = $_GET['busca'] ?? '';

// SQL buscando as notas e calculando a média (ajustado para 3 notas)
$sql = "SELECT *, (nota1 + nota2 + nota3) / 3 AS media 
        FROM alunoconcluinte 
        WHERE nome LIKE '%$busca%' 
        ORDER BY media DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos - Notas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            background: #009688;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            margin-top: 0;
        }

        .busca-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .busca-input {
            padding: 10px;
            width: 50%;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn-busca {
            padding: 10px 20px;
            background: #009688;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        /* Cabeçalho igual ao da imagem da atividade */
        th {
            background: #00bcd4;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .media-destaque {
            font-weight: bold;
            color: #00796b;
            background-color: #e0f2f1;
        }

        .btn-voltar {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <a href="index.php" class="btn-voltar">← Voltar ao Menu</a>
        <h2>Alunos Concluintes</h2>

        <div class="busca-container">
            <form method="GET">
                <input type="text" name="busca" class="busca-input" placeholder="Buscar por nome..." value="<?= htmlspecialchars($busca) ?>">
                <button type="submit" class="btn-busca">Pesquisar</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Média</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['idalunoconcluinte']}</td>
                            <td>{$row['nome']}</td>
                            <td>" . number_format($row['nota1'], 1) . "</td>
                            <td>" . number_format($row['nota2'], 1) . "</td>
                            <td>" . number_format($row['nota3'], 1) . "</td>
                            <td class='media-destaque'>" . number_format($row['media'], 1) . "</td>
                          </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum aluno encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>