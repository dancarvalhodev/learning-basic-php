<?php
$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas); // Espera uma referencia, logo modifica a variável de fato

echo 'Desordenadas';
var_dump($notas);

sort($notas);
echo 'Ordenadas';
var_dump($notasOrdenadas);