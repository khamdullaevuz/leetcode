<?php
class Solution {

    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage($image) {
        foreach($image as $key => $list)
        {
            $list = array_reverse($list);

            $items = [];

            foreach($list as $item_key => $item)
            {
                $items[] = $item === 0 ? 1 : 0;
            }

            $image[$key] = $items;
        }

        return $image;
    }
}

$image = [[1,1,0],[1,0,1],[0,0,0]];
print_r((new Solution())->flipAndInvertImage($image)); // Output: [[1,0,0],[0,1,0],[1,1,1]]