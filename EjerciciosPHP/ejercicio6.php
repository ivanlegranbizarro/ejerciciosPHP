<?php

/* Escribe una función que tome un array de números, usa el foreach para elevar
al cuadrado cada número y devuelve el array modificado */

$arrayNumeros = [1, 2, 3, 4, 5];


function elevarAlCuadrado(array $arrayNumeros): array
{
    $numerosElevados = [];
    foreach ($arrayNumeros as $numero) {
        $numerosElevados[] = $numero ** 2;
    }

    return $numerosElevados;
}
