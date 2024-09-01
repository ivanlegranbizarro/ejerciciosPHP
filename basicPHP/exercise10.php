<?php
// 3. Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30.
// Sample Input:
// 30, 0
// 25, 5
// 20, 30
// 20, 25
// Sample Output:
// bool(true)
// bool(true)
// bool(true)
// bool(false)


function detecting_30(int $num1, int $num2): bool
{
    return $num1 == 30 || $num2 == 30 || $num1 + $num2 == 30;
}

var_dump(detecting_30(30, 0));
echo '<br>';
var_dump(detecting_30(25, 5));
echo '<br>';
var_dump(detecting_30(20, 30));
echo '<br>';
var_dump(detecting_30(20, 25));
