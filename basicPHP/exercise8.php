<?php
// 1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
// Sample Input
// 1, 2
// 3, 2
// 2, 2
// Sample Output:
// 3
// 5
// 12


function sum_two_numbers_triple_if_they_are_equal(int $num1, int $num2): int
{
    if ($num1 != $num2) {
        return $num1 + $num2;
    }
    return ($num1 + $num2) * 3;
}

echo sum_two_numbers_triple_if_they_are_equal(1, 2);
echo '<br>';
echo sum_two_numbers_triple_if_they_are_equal(3, 2);
echo '<br>';
echo sum_two_numbers_triple_if_they_are_equal(2, 2);
