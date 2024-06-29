<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        $product = 1;
        $sum = 0;

        while($n > 0)
        {
            $sum += $n % 10;
            $product *= $n % 10;
            $n = (int)($n / 10);
        }

        return $product - $sum;
    }
}

$n = 234;

var_dump((new Solution())->subtractProductAndSum($n)); // Output: 15