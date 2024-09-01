<?php
// 5. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.
// Sample Input:
// "if else"
// "else"
// "if"
// Sample Output:
// if else
// if else
// if


function add_if_if_not_if(string $string): string
{
    if (str_starts_with($string, 'if')) {
        return $string;
    }
    return 'if' . ' ' . $string;
}

echo add_if_if_not_if('if else');
echo '<br>';
echo add_if_if_not_if('else');
echo '<br>';
echo add_if_if_not_if('if');
