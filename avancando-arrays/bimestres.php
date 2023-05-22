<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Maria' => 9,
    'João' => 8,
    'Vinicius' => 6,
    'Roberto' => 7
];

$notasBimestre2 = [
    'Ana' => 9,
    'João' => 8,
    'Roberto' => 7
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));