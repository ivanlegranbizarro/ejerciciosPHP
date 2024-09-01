<?php
// 6. Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive.
// Sample Input:
// "Python", 1
// "Python", o
// "Python", 4
// Sample Output:
// Pthon
// ython
// Pythn


function remove_the_character_indicate_on_string(int $numberOfCharacter, string $string): string
{
    if ($numberOfCharacter >= 0 &&  $numberOfCharacter <= (strlen($string) - 1)) {
        return substr($string, 0, $numberOfCharacter) . substr($string, $numberOfCharacter + 1);
    }
}


echo remove_the_character_indicate_on_string(1, 'Python');
echo '<br>';
echo remove_the_character_indicate_on_string(0, 'Python');
echo '<br>';
echo remove_the_character_indicate_on_string(4, 'Python');
