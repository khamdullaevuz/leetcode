<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $arr = [];

        $s = str_split($s);
        foreach ($s as $_s)
        {
            if(in_array($_s, ['(', '{', '[']))
            {
                $arr[] = $_s;
            }elseif($_s == ']' and count($arr) > 0 and $arr[count($arr) - 1] === '[')
            {
                array_pop($arr);
            }elseif($_s == ')' and count($arr) > 0 and $arr[count($arr) - 1] === '(')
            {
                array_pop($arr);
            }elseif($_s == '}' and count($arr) > 0 and $arr[count($arr) - 1] === '{')
            {
                array_pop($arr);
            }else{
                return false;
            }
        }

        return count($arr) === 0;
    }
}

print_r((new Solution())->isValid('{}[]()'));