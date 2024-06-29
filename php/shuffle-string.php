<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $new = [];
        $str = str_split($s);
        foreach($str as $key => $value)
        {
            $new[$indices[$key]] = $value;
        }

        ksort($new);

        return implode("", $new);
    }
}


echo (new Solution())->restoreString("codeleet", [4,5,6,7,0,2,1,3]); // Output: "leetcode"
