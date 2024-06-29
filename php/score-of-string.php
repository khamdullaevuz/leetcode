<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function scoreOfString($s) {
        $str = str_split($s);

        $s = 0;
        for($i = 0; $i < count($str) - 1; $i++)
        {
            $v1 = ord($str[$i]);
            $v2 = ord($str[$i+1]);
            $s += abs($v1-$v2);
        }

        return $s;
    }
}

echo (new Solution())->scoreOfString("hello"); // Output: 2