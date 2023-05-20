<?php

$notas = [
    'Ana' => 10,
    'Maria' => 9,
    'João' => 8,
    'Vinicius' => null,
    'Roberto' => 7
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Vinicius fez a prova?' . PHP_EOL;
//var_dump(array_key_exists('Vinicius', $notas));
var_dump(isset($notas['Vinicius']));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
$chave = array_search(10, $notas, true);
var_dump($chave);

// array_key_exists - verifica se a chave existe
// in_array - verifica se o valor existe
// isset - verifica se a chave existe e não é nula
