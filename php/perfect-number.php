<?php
class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {
        $sum = 0;
        for($i = 1; $i < $num; $i++)
        {
            if($num % $i == 0)
            {
                $sum += $i;
            }
        }

        return $sum == $num;
    }
}

$num = 28;
var_dump((new Solution())->checkPerfectNumber($num)); // Output: true