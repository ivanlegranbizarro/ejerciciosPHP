<?php
// 10. Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.
// Sample Input
// 3
// 14
// 12
// 37
// Sample Output:
// bool(true)
// bool(true)
// bool(true)
// bool(false)

function check_if_number_multiple_of_3_or_7(int $num): bool
{
    $num = abs($num);
    return $num % 3 === 0 || $num % 7 === 0;
}

var_dump(check_if_number_multiple_of_3_or_7(3));
echo '<br>';
var_dump(check_if_number_multiple_of_3_or_7(14));
echo '<br>';
var_dump(check_if_number_multiple_of_3_or_7(12));
echo '<br>';
var_dump(check_if_number_multiple_of_3_or_7(37));
