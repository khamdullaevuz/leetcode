<?php

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $letters = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
        ];

        $let = str_split($columnTitle);
        $let = array_reverse($let);
        $count = 0;
        foreach ($let as $key => $value)
        {
            $count += (array_search($value, $letters) + 1) * pow(26, $key);
        }

        return $count;
    }
}

echo (new Solution())->titleToNumber("A"); // Output: 1
echo (new Solution())->titleToNumber("AB"); // Output: 28