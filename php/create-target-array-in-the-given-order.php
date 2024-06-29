<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index): array
    {
        $new = [];
        foreach($nums as $key => $num){
            if(isset($new[$index[$key]]))
            {
               $this->move($new, $index, $key);
            }
            $new[$index[$key]] = $num;
        }

        return $new;
    }

    function move(&$new, $index, $key): void
    {
        $temp = $new[$index[$key]];
        $new[$index[$key]] = $new[$index[$key] + 1];
        $new[$index[$key] + 1] = $temp;

        if(isset($new[$index[$key] + 1]))
        {
            $this->move($new, $index, $index[$key] + 1);
        }
    }
}

$nums = [0,1,2,3,4];
$index = [0,1,2,2,1];

var_dump((new Solution())->createTargetArray($nums, $index));