<?php
// 4. Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200.
// Sample Input:
// 103
// 90
// 89
// Sample Output:
// bool(true)
// bool(true)
// bool(false)


function check_integer(int $num): bool
{
    return abs(100 - $num) <= 10 || abs(200 - $num) <= 10;
}
