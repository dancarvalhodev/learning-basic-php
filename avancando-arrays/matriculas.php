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

var_dump($alunos2022);