<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se são Múltiplos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Verificar se são Múltiplos</h1>
        <form method="post">
            <div class="form-group">
                <label for="a">Valor de a:</label>
                <input type="number" class="form-control" id="a" name="a" required>
            </div>
            <div class="form-group">
                <label for="b">Valor de b:</label>
                <input type="number" class="form-control" id="b" name="b" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar Múltiplos</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtem os valores de a e b do formulário
            $a = $_POST["a"];
            $b = $_POST["b"];

            // Verifica se são múltiplos
            if ($a % $b === 0 || $b % $a === 0) {
                echo "<h2>São múltiplos</h2>";
            } else {
                echo "<h2>Não são múltiplos</h2>";
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS (opcional, apenas se você precisar) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
