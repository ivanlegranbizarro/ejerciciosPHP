 <?php
    //  Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100.
    // Sample Input:
    // 120, -1
    // -1, 120
    // 2, 120
    // Sample Output:
    // bool(true)
    // bool(true)
    // bool(false)


    function check_if_one_is_positive_and_the_other_negative(int $temp1, int $temp2): bool
    {
        return ($temp1 < 0 && $temp2 > 100) || ($temp1 > 100 && $temp2 < 0);
    }


    var_dump(check_if_one_is_positive_and_the_other_negative(120, -1));
    echo '<br>';
    var_dump(check_if_one_is_positive_and_the_other_negative(-1, 120));
    echo '<br>';
    var_dump(check_if_one_is_positive_and_the_other_negative(2, 120));
