<?php
// 11. Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with the 3 characters added at both the front and back. If the given string length is less than 3, use whatever characters are there.
// Sample Input:
// "Python"
// "JS"
// "Code"
// Sample Output:
// PytPythonPyt
// JSJSJS
// CodCodeCod


function new_string(string $string): string
{
    if ($string < 3) {
        return $string;
    }
    $three_first_characters = substr($string, 0, 3);
    return $three_first_characters . $string . $three_first_characters;
}

echo new_string('Code');
echo '<br>';
echo new_string('JS');
echo '<br>';
echo new_string('Python');
