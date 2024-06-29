<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $split = str_split($s);
        $count = count($split);

        for($i = 0; $i < $count; $i++)
        {
            $_count = 0;
            for($j = 0; $j < $count; $j++)
            {
                if($i == $j) continue;
                if($split[$j] == $split[$i])
                {
                    $_count++;
                }
                print_r($split[$i] . " " . $split[$j] . " " . $_count . "\n");

            }

            if($_count == 0){
                return $i;
            }
        }

        return -1;
    }
}

$s = "aabb";
var_dump((new Solution())->firstUniqChar($s)); // Output: 0