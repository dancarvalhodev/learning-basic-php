<?php
// Aspas duplas: PHP entende que dentro do texto pode ser necessário interpretar algo.
// Aspas simples: PHP não entende nada dentro do texto que pode ser interpretado.
// \n: Quebra de linha
// \t Tabulação
// \r\n Quebra de linha em windows

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho $idade anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos" . PHP_EOL;
echo "Você tem $idade anos. Pode entrar";