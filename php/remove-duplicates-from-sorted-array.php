<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $count = 0;
        foreach($nums as $key => $value)
        {
            unset($nums[$key]);
            if(!in_array($value, $nums))
            {
                $nums[$key] = $value;
            }else{
                $count++;
            }
        }

        return $count;
    }
}

$nums = [1, 1, 2];
echo (new Solution())->removeDuplicates($nums);
print_r($nums);