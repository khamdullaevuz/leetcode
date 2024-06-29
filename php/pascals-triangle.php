<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $res = [[1]];

        for($i = 0; $i < $numRows - 1; $i++)
        {
            $last = $res[count($res) - 1];
            $temp = $last;
            array_unshift($temp, 0);
            $temp[] = 0;
            $row = [];
            for($j = 0; $j < count($last) + 1; $j++)
            {
                $row[] = $temp[$j] + $temp[$j+1];
            }
            $res[] = $row;
        }

        return $res;
    }
}

$numRows = 5;
print_r((new Solution())->generate($numRows));