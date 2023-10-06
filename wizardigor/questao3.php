<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade em Dias</title>
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Idade em Dias</h1>
        <div class="input-group">
            <label for="anos">Anos:</label>
            <input type="number" id="anos" placeholder="Digite a idade em anos">
        </div>
        <div class="input-group">
            <label for="meses">Meses:</label>
            <input type="number" id="meses" placeholder="Digite a idade em meses">
        </div>
        <div class="input-group">
            <label for="dias">Dias:</label>
            <input type="number" id="dias" placeholder="Digite a idade em dias">
        </div>
        <button onclick="calcularIdade()">Calcular Idade em Dias</button>
        <div class="result" id="resultado"></div>
    </div>

    <script>
        function calcularIdade() {
            var anos = parseInt(document.getElementById('anos').value) || 0;
            var meses = parseInt(document.getElementById('meses').value) || 0;
            var dias = parseInt(document.getElementById('dias').value) || 0;

            // Calcula a idade em dias
            var idade_em_dias = (anos * 365) + (meses * 30) + dias;

            // Exibe a idade em dias
            document.getElementById('resultado').innerText = "A idade em dias é: " + idade_em_dias + " dias";
        }
    </script>
</body>
</html>
