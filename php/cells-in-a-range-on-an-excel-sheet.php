<?php

class Solution {

    /**
     * @param String $s
     * @return String[]
     */
    function cellsInRange($s) {
        $cells = explode(":", $s);
        $start = $cells[0];
        $end = $cells[1];
        $start = str_split($start);
        $end = str_split($end);
        $start_letter = $start[0];
        $start_number = $start[1];
        $end_letter = $end[0];
        $end_number = $end[1];
        $result = [];

        while($start_letter <= $end_letter)
        {
            $number = $start_number;
            while($number <= $end_number)
            {
                $result[] = $start_letter . $number;
                $number++;
            }
            $start_letter++;
        }

        return $result;
    }
}

print_r((new Solution())->cellsInRange("A1:B2")); // Output: ["A1","A2","B1","B2"]