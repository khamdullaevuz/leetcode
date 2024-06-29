<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        foreach($nums as $key => $num)
        {
            if($num === $val)
            {
                unset($nums[$key]);
            }
        }
    }
}

$nums = [1,2,3,4,5,6];
$val = 3;
(new Solution())->removeElement($nums, $val);
print_r($nums);