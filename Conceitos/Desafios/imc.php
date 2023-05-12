<?php

// Desafio:  a partir de uma altura e peso definidas, calcularmos o IMC.
// Para isso, você precisará pesquisar a fórmula na internet (que é bastante simples).
//A partir dessa fórmula e da tabela de IMCs, o código deverá exibir se o usuário está abaixo,
// dentro ou acima do nível recomendado.

$peso = 80;
$altura = 1.82;

$imc = round(($peso / ($altura ** 2)), 2);

$feedback = match(true) {
    $imc < 16 => 'Baixo peso Grau III' . PHP_EOL,
    $imc >= 16 && $imc <= 16.99 => 'Baixo peso Grau II' . PHP_EOL,
    $imc >= 17 && $imc <= 18.49 => 'Baixo peso Grau I' . PHP_EOL,
    $imc >= 18.50 && $imc <= 24.99 => 'Peso Ideal' . PHP_EOL,
    $imc >= 25 && $imc <= 29.99 => 'Sobrepeso' . PHP_EOL,
    $imc >= 30 && $imc <= 34.99 => 'Obesidade Grau I' . PHP_EOL,
    $imc >= 35 && $imc <= 34.99 => 'Obesidade Grau II' . PHP_EOL,
    default => 'Obesidade Grau III' . PHP_EOL
};

echo $feedback;