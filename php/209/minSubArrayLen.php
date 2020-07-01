<?php
/**
 * 给定一个含有 n 个正整数的数组和一个正整数 s ，找出该数组中满足其和 ≥ s 的长度最小的连续子数组。如果不存在符合条件的连续子数组，返回 0。
 *
 * 示例:
 *
 * 输入: s = 7, nums = [2,3,1,2,4,3]
 * 输出: 2
 * 解释: 子数组 [4,3] 是该条件下的长度最小的连续子数组。
 *
 */
class Solution
{
    /**
     * 滑动窗口
     * @param Integer $s
     * @param Integer[] $nums
     * @return Integer
     */
    public function minSubArrayLen($s, $nums)
    {

    }
    // /**
    //  * 暴力计算 超时
    //  * @param Integer $s
    //  * @param Integer[] $nums
    //  * @return Integer
    //  */
    // public function minSubArrayLen($s, $nums)
    // {
    //     $count = count($nums);
    //     if (!$count) {
    //         return 0;
    //     }
    //     $len = $count + 1;
    //     for ($i = 0; $i < $count; $i++) {
    //         $sum = 0;
    //         for ($j = $i; $j < $count; $j++) {
    //             $sum += $nums[$j];
    //             if ($sum >= $s) {
    //                 $len = min($len, $j - $i + 1);
    //             }
    //         }
    //     }
    //     return $len > $count ? 0 : $len;
    // }
}

$obj = new Solution();

var_dump($obj->minSubArrayLen(3, [1, 1]));
