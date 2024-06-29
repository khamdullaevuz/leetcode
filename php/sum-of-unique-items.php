<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums) {
        $count = count($nums);
        $sum = 0;

        for($i = 0; $i < $count; $i++)
        {
            $current = $nums[$i];

            for($j = $i + 1; $j < $count; $j++)
            {
                if($current == $nums[$j])
                {
                    unset($nums[$i]);
                    unset($nums[$j]);
                }
            }
        }

        foreach($nums as $num)
        {
            $sum += $num;
        }

        return $sum;
    }
}

$nums = [1, 2, 3, 2];
print_r((new Solution())->sumOfUnique($nums)); // Output: 4