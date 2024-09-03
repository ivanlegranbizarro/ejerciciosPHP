<?php
// 14. Write a PHP program to check two given integers whether either of them is in the range 100..200 inclusive.
// Sample Input:
// 100, 199
// 250, 300
// 105, 190
// Sample Output:
// bool(true)
// bool(false)
// bool(true)


function check_range(int $num1, int $num2): bool
{
    if ($num1 >= 100 && $num1 <= 200  || $num2 >= 100 && $num2 <= 200) {
        return true;
    }
    return false;
}



var_dump(check_range(100, 199));
echo '<br>';
var_dump(check_range(250, 300));
echo '<br>';
var_dump(check_range(105, 190));
echo '<br>';
