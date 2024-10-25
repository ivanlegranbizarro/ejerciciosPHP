<?php

// Ejemplo if clásico

$age = 39;

if ($age >= 18) {
    echo 'Eres mayor de edad';
} else {
    echo 'Eres menor de edad';
}

// Ejemplo if ternario


echo $age >= 18 ? 'Eres mayor de edad' : 'Eres menor de edad';

// Operador de null coalescing

echo $name ?? 'No hay nombre';
