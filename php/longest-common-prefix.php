<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs): string
    {
        sort($strs);

        $first = $strs[0];
        $last = $strs[count($strs) - 1];

        $ans = "";

        for($i = 0; $i <= min(strlen($first), strlen($last)); $i++)
        {
            if($first[$i] != $last[$i])
            {
                return $ans;
            }

            $ans .= $first[$i];
        }

        return $ans;
    }
}

echo (new Solution())->longestCommonPrefix(["flower","flow","flight"]); // Output: "fl"