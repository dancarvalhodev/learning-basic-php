<?php

// Desafio: exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer,
// e queremos exibir o resultado da sua multiplicação de 1 até 9.

$numero = 9;
$i = 0;

while ($i <= 10) {
    echo "$numero X $i = " . $numero * $i;
    echo PHP_EOL;

    $i++;
}