<?php
// Função para calcular a idade em dias
function calcularIdadeEmDias($anos, $meses, $dias) {
    // Define o número de dias em um ano, mês e dia
    $dias_por_ano = 365;
    $dias_por_mes = 30; // Usando uma média de 30 dias por mês

    // Calcula a idade em dias
    $idade_em_dias = ($anos * $dias_por_ano) + ($meses * $dias_por_mes) + $dias;

    return $idade_em_dias;
}

// Leitura da idade em anos, meses e dias
$anos = intval(readline("Digite a idade em anos: "));
$meses = intval(readline("Digite a idade em meses: "));
$dias = intval(readline("Digite a idade em dias: "));

// Chama a função para calcular a idade em dias
$idade_em_dias = calcularIdadeEmDias($anos, $meses, $dias);

// Exibe a idade em dias
echo "A idade em dias é: " . $idade_em_dias . " dias\n";
?>
