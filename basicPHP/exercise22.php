<?php
// 15. Write a PHP program to check whether three given integer values are in the range 20..50 inclusive. Return true if 1 or more of them are in the said range otherwise false.
// Sample Input:
// 11, 20, 12
// 30, 30, 17
// 25, 35, 50
// 15, 12, 8
// Sample Output:
// bool(true)
// bool(true)
// bool(true)
// bool(false)


function check_three_integers(array $numbers): array
{
    $array_resultados = [];
    foreach ($numbers as $num) {
        if ($num >= 20 && $num <= 50) {
            $array_resultados[$num] = true;
        } else {
            $array_resultados[$num] = false;
        }
    }
    return $array_resultados;
}


print_r(check_three_integers([11, 20, 12, 30, 30, 17, 25, 35, 50, 15, 12, 8]));
