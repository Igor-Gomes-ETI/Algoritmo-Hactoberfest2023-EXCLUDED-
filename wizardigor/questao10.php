<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar o Maior Valor</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Encontrar o Maior Valor</h1>
        <form method="post">
            <div class="form-group">
                <label for="a">Valor de a:</label>
                <input type="number" class="form-control" id="a" name="a" required>
            </div>
            <div class="form-group">
                <label for="b">Valor de b:</label>
                <input type="number" class="form-control" id="b" name="b" required>
            </div>
            <div class="form-group">
                <label for="c">Valor de c:</label>
                <input type="number" class="form-control" id="c" name="c" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Maior Valor</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtem os valores de a, b e c do formulário
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];

            // Realiza os cálculos
            $a *= 2;
            $b -= $a;
            $c = abs($c);

            // Encontra o maior valor
            $maior_valor = max($a, $b, $c);

            // Exibe o resultado
            echo "<h2>O maior dos três valores é: $maior_valor É o maior</h2>";
        }
        ?>
    </div>

    <!-- Bootstrap JS (opcional, apenas se você precisar) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
