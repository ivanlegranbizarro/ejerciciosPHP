# Ejercicios de PHP para Nivel Junior

## 1. Calcular la suma de dos números
**Enunciado:** Escribe una función que reciba dos números y devuelva su suma.

**Explicación:** Esta función debe tomar dos parámetros, sumarlos y retornar el resultado.

**Solución:**
```php
function suma($a, $b) {
    return $a + $b;
}

2. Comprobar si un número es par

Enunciado: Escribe una función que verifique si un número es par o impar.

Explicación: Usa el operador módulo (%) para determinar si el número dividido entre 2 tiene residuo. Si no tiene residuo, es par.

Solución:

php

function esPar($numero) {
    return $numero % 2 === 0;
}

3. Obtener la longitud de una cadena

Enunciado: Crea una función que reciba una cadena y devuelva su longitud.

Explicación: Utiliza la función strlen() de PHP para obtener la longitud de la cadena.

Solución:

php

function longitudCadena($cadena) {
    return strlen($cadena);
}

4. Contar vocales en una cadena

Enunciado: Escribe una función que cuente cuántas vocales hay en una cadena.

Explicación: Itera sobre cada carácter de la cadena y verifica si es una vocal.

Solución:

php

function contarVocales($cadena) {
    $vocales = 'aeiouAEIOU';
    $contador = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (strpos($vocales, $cadena[$i]) !== false) {
            $contador++;
        }
    }
    return $contador;
}

5. Invertir una cadena

Enunciado: Crea una función que reciba una cadena y devuelva la misma cadena invertida.

Explicación: Puedes usar la función strrev() para invertir la cadena.

Solución:

php

function invertirCadena($cadena) {
    return strrev($cadena);
}

6. Determinar si un número es primo

Enunciado: Escribe una función que verifique si un número es primo.

Explicación: Un número primo solo es divisible por 1 y por sí mismo, así que verifica divisibilidad desde 2 hasta la raíz cuadrada del número.

Solución:

php

function esPrimo($numero) {
    if ($numero <= 1) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

7. Encontrar el máximo de un array

Enunciado: Crea una función que reciba un array y devuelva el valor máximo.

Explicación: Usa la función max() de PHP para obtener el valor máximo del array.

Solución:

php

function maximoArray($array) {
    return max($array);
}

8. Filtrar números pares de un array

Enunciado: Escribe una función que reciba un array de números y devuelva un nuevo array solo con los números pares.

Explicación: Itera sobre el array y utiliza una condición para seleccionar solo los pares.

Solución:

php

function filtrarPares($array) {
    return array_filter($array, function($numero) {
        return $numero % 2 === 0;
    });
}

9. Calcular la media de un array

Enunciado: Crea una función que calcule la media de los números en un array.

Explicación: Suma todos los elementos del array y divide por el número de elementos.

Solución:

php

function calcularMedia($array) {
    return array_sum($array) / count($array);
}

10. Reemplazar espacios en blanco por guiones

Enunciado: Escribe una función que reemplace todos los espacios en blanco de una cadena por guiones.

Explicación: Usa la función str_replace() para realizar el reemplazo.

Solución:

php

function reemplazarEspacios($cadena) {
    return str_replace(' ', '-', $cadena);
}

11. Comprobar si una cadena es un palíndromo

Enunciado: Crea una función que verifique si una cadena es un palíndromo.

Explicación: Compara la cadena con su versión invertida.

Solución:

php

function esPalindromo($cadena) {
    return $cadena === strrev($cadena);
}

12. Crear un array de números del 1 al 100

Enunciado: Escribe una función que genere un array con números del 1 al 100.

Explicación: Usa un bucle para llenar el array.

Solución:

php

function generarArray() {
    return range(1, 100);
}

13. Convertir un array a una cadena

Enunciado: Crea una función que convierta un array en una cadena, separando los elementos por comas.

Explicación: Usa la función implode() para convertir el array a cadena.

Solución:

php

function arrayACadena($array) {
    return implode(', ', $array);
}

14. Encontrar el elemento más frecuente en un array

Enunciado: Escribe una función que encuentre el elemento que más veces se repite en un array.

Explicación: Usa array_count_values() para contar la frecuencia de cada elemento y luego determina el máximo.

Solución:

php

function elementoFrecuente($array) {
    $frecuencia = array_count_values($array);
    return array_search(max($frecuencia), $frecuencia);
}

15. Obtener el número de palabras en una cadena

Enunciado: Crea una función que cuente cuántas palabras hay en una cadena.

Explicación: Usa str_word_count() para contar las palabras.

Solución:

php

function contarPalabras($cadena) {
    return str_word_count($cadena);
}

16. Calcular el factorial de un número

Enunciado: Escribe una función que calcule el factorial de un número.

Explicación: Utiliza un bucle para multiplicar los números desde 1 hasta el número dado.

Solución:

php

function factorial($numero) {
    $resultado = 1;
    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

17. Convertir grados Celsius a Fahrenheit

Enunciado: Crea una función que convierta grados Celsius a Fahrenheit.

Explicación: Usa la fórmula F=C×95+32F=C×59​+32.

Solución:

php

function celsiusAFahrenheit($celsius) {
    return $celsius * 9/5 + 32;
}

18. Comprobar si un año es bisiesto

Enunciado: Escribe una función que determine si un año es bisiesto.

Explicación: Un año es bisiesto si es divisible por 4, pero no por 100, a menos que sea divisible por 400.

Solución:

php

function esBisiesto($anio) {
    return ($anio % 4 === 0 && $anio % 100 !== 0) || ($anio % 400 === 0);
}

19. Obtener la fecha actual en formato 'Y-m-d'

Enunciado: Crea una función que devuelva la fecha actual en formato 'YYYY-MM-DD'.

Explicación: Usa la función date() de PHP para formatear la fecha.

Solución:

php

function fechaActual() {
    return date('Y-m-d');
}

20. Generar un array de números aleatorios

Enunciado: Escribe una función que genere un array de 10 números aleatorios entre 1 y 100.

Explicación: Utiliza un bucle y la función rand() para llenar el array.

Solución:

php

function generarNumerosAleatorios() {
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }
    return $numeros;
}