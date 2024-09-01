<?php
// 2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
// Sample Input:
// 53
// 30
// 51
// Sample Output:
// 6
// 21
// 0

function get_the_absolute_difference(int $n): int
{
    $result = 51 - $n;
    $result = abs($result);
    if ($n > 51) {
        return $result * 3;
    }
    return $result;
}


echo get_the_absolute_difference(53);
echo '<br>';
echo get_the_absolute_difference(30);
echo '<br>';
echo get_the_absolute_difference(51);
