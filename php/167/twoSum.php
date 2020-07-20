<?php

/**
 * Class Solution
 *
 * https://leetcode-cn.com/problems/two-sum-ii-input-array-is-sorted/
 *
 * 给定一个已按照升序排列 的有序数组，找到两个数使得它们相加之和等于目标数。
 *
 * 函数应该返回这两个下标值 index1 和 index2，其中 index1 必须小于 index2。
 */
class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $i = 0;
        $j = count($numbers) - 1;
        //由于是有序的
        while ($i < $j) {
            //大的左移
            if ($numbers[$i] + $numbers[$j] > $target) {
                $j --;
            }
            //小的右移
            else if ($numbers[$i] + $numbers[$j] < $target) {
                $i++;
            }
            //刚好相等
            else {
                return [$i + 1, $j + 1];
            }
        }
        return [0];
    }
}
