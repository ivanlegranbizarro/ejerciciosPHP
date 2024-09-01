<?php
// 7. Write a PHP program to exchange the first and last characters in a given string and return the new string.
// Sample Input:
// "abcd"
// "a"
// "xy"
// Sample output:
// dbca
// a
// yx


function exchange_first_and_last_character(string $string): string
{
    if (strlen($string) <= 1) {
        return $string;
    }
    $first_character = $string[0];
    $last_character = $string[strlen($string) - 1];

    return $last_character . substr($string, 1, -1) . $first_character;
}


echo exchange_first_and_last_character('abcd');
echo '<br>';
echo exchange_first_and_last_character('a');
echo '<br>';
echo exchange_first_and_last_character('xy');
