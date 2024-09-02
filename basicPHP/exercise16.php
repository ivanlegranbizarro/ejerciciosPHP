<?php
// 9. Write a PHP program to create a new string with the last char added at the front and back of a given string of length 1 or more.
// Sample Input:
// "Red"
// "Green"
// "1"
// Sample Output:
// dRedd
// nGreenn
// 111


function add_last_char_at_front(string $string): string
{
    $last_char_index = strlen($string) - 1;
    $last_char = $string[$last_char_index];

    return $last_char . $string;
}


echo add_last_char_at_front('Red');
