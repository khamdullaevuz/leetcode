<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @param Integer $k
     * @return Integer
     */
    function numberOfPairs($nums1, $nums2, $k) {
        $count1 = count($nums1);
        $count2 = count($nums2);
        $counter = 0;

        for($i = 0; $i < $count1; ++$i)
        {
            for($j = 0; $j < $count2; ++$j)
            {
                $div = $nums2[$j] * $k;
                if($nums1[$i] % $div == 0)
                {
                    $counter++;
                }
            }
        }

        return $counter;
    }
}

$nums1 = [1, 2, 3];

$nums2 = [2, 3, 4];

$k = 1;

var_dump((new Solution())->numberOfPairs($nums1, $nums2, $k)); // Output: 2