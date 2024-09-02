<?php
// 12. Write a PHP program to check if a given string starts with 'C#' or not.
// Sample Input:
// "PHP"
// "C#"
// "C++"
// Sample Output:
// bool(false)
// bool(true)
// bool(false

function check_if_string_starts_c(string $string): bool
{
    return str_starts_with($string, 'C#');
}

var_dump(check_if_string_starts_c('PHP'));
echo '<br>';
var_dump(check_if_string_starts_c('C#'));
echo '<br>';
var_dump(check_if_string_starts_c('C++'));
