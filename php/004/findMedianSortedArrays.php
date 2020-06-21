<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $newArr = array_merge($nums1,$nums2);
        $count = count($newArr);
        $middle = (int)($count / 2);
        sort($newArr);
        if ($count % 2 === 0) {
            return ($newArr[$middle] + $newArr[$middle - 1]) / 2;
        }

        return $newArr[$middle];
    }
}
