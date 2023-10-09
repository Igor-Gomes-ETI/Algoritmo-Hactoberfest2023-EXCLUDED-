<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média Ponderada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .input-group {
            margin-bottom: 10px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .result {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cálculo de Média Ponderada</h1>
        <form method="post">
            <div class="input-group">
                <label for="codigo">Código do aluno:</label>
                <input type="text" id="codigo" name="codigo" required>
            </div>
            <div class="input-group">
                <label for="nota1">Nota 1:</label>
                <input type="number" id="nota1" name="nota1" step="0.01" required>
            </div>
            <div class="input-group">
                <label for="nota2">Nota 2:</label>
                <input type="number" id="nota2" name="nota2" step="0.01" required>
            </div>
            <div class="input-group">
                <label for="nota3">Nota 3:</label>
                <input type="number" id="nota3" name="nota3" step="0.01" required>
            </div>
            <button type="submit">Calcular Média</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtem os valores do formulário
            $codigo = $_POST["codigo"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];

            // Calcula a média ponderada
            $maiorNota = max($nota1, $nota2, $nota3);
            $media = ($nota1 * 3 + $nota2 * 3 + $nota3 * 4) / 10;

            // Determina se foi aprovado ou reprovado
            $status = ($media >= 5) ? "APROVADO" : "REPROVADO";

            // Exibe os resultados
            echo "<div class='result'>";
            echo "<p>Código do aluno: $codigo</p>";
            echo "<p>Notas: $nota1, $nota2, $nota3</p>";
            echo "<p>Média: $media</p>";
            echo "<p>Status: $status</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
