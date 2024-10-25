<?php

// Los arrays sirven para almacenar valores de diferente tipo en una sola variable.

$nombres = ['Juan', 'María', 'Pedro', 'Daniela'];

echo $nombres[2];

// Arrays asociativos

$persona1 = [
    'nombre' => 'Juan',
    'apellidos' => 'Peña',
    'edad' => 25
];

$vollDamm = [
    'name' => 'VollDamm',
    'alcohol' => '7.2',
    'country' => 'España'
];


echo $persona1['nombre'];

echo '<br>';

echo $vollDamm['alcohol'];


$amigos = ['Amanda', 'Rubén', 'Ernesto', 'Irene'];

foreach ($amigos as $amigo) {
    echo $amigo . '<br>';
}

// Arrays multidimensionales: Arrays dentro de arrays


$beers = [
    'VollDamm' => [
        'alcohol' => 7.2,
        'country' => 'España'
    ],
    'Stella' => [
        'alcohol' => 4.8,
        'country' => 'Estados Unidos'
    ],
    'Corona' => [
        'alcohol' => 4.5,
        'country' => 'México'
    ]
];


echo $beers['VollDamm']['alcohol'];

// Funciones comunes con arrays

echo '<br>';
echo '<br>';

$cervezas = ['VollDamm', 'Estrella-Damm', 'Estrella-Galicia'];

echo count($cervezas);
