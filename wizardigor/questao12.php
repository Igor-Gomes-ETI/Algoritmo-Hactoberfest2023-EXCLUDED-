<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Nadadores</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Classificação de Nadadores</h1>
        <form method="post">
            <div class="form-group">
                <label for="idade">Idade do nadador:</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
            </div>
            <button type="submit" class="btn btn-primary">Classificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtem a idade do nadador do formulário
            $idade = $_POST["idade"];

            // Classifica o nadador
            $categoria = "";
            if ($idade >= 5 && $idade <= 7) {
                $categoria = "Infantil A";
            } elseif ($idade >= 8 && $idade <= 10) {
                $categoria = "Infantil B";
            } elseif ($idade >= 11 && $idade <= 13) {
                $categoria = "Juvenil A";
            } elseif ($idade >= 14 && $idade <= 17) {
                $categoria = "Juvenil B";
            } else {
                $categoria = "Adulto";
            }

            // Exibe a categoria
            echo "<h2>O nadador está na categoria: $categoria</h2>";
        }
        ?>
    </div>

    <!-- Bootstrap JS (opcional, apenas se você precisar) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
