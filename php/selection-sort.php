<?php

$nums = [1, 5, 9, 0, 3, 7, 2, 6, 8, 4];

$length = count($nums);

for($i = 0; $i < $length; $i++)
{
    $min = $i;
    for($j = $i + 1; $j < $length; $j++)
    {
        if($nums[$j] < $nums[$min])
        {
            $min = $j;
        }
    }

    $temp = $nums[$i];
    $nums[$i] = $nums[$min];
    $nums[$min] = $temp;
}

print_r($nums); // Output: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]