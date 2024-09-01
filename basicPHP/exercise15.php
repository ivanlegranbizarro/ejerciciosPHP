<?php
// 8. Write a PHP program to create a new string which is 4 copies of the 2 front characters of a given string. If the given string length is less than 2 return the original string.
// Sample Input:
// "C Sharp"
// "JS"
// "a"
// Sample Output:
// C C C C
// JSJSJSJS


function new_string(string $string): string
{
    if (strlen($string) < 2) {
        return $string;
    }
    $first_character = $string[0];
    $second_character = $string[1];
    $new_string = $first_character . $second_character;
    $new_string = str_repeat($new_string, 4);
    return $new_string;
}


echo new_string('C Sharp');
echo '<br>';
echo new_string('JS');
echo '<br>';
echo new_string('a');
