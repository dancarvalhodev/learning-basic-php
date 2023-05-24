<?php

$alunos2021 = [
    'Ana',
    'Maria',
    'João',
    'Vinicius',
    'Roberto'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

//$alunos2022 = array_merge($alunos2021, $novosAlunos);
//$alunos2022 = $alunos2021 + $novosAlunos;
$alunos2022 = [...$alunos2021, 'Carlos Vinicius' ,...$novosAlunos];

array_push($alunos2022, 'Alice', 'Charlie', 'Bob');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stefanie', 'Rafa');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);
