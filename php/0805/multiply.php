<?php

/**
 * Class Solution
 *
 * 递归乘法。 写一个递归函数，不使用 * 运算符， 实现两个正整数的相乘。可以使用加号、减号、位移，但要吝啬一些。
 *
 * https://leetcode-cn.com/problems/recursive-mulitply-lcci/
 */
class Solution
{

    /**
     * @param Integer $A
     * @param Integer $B
     * @return Integer
     */
    function multiply($A, $B)
    {
        if ($A == 0 || $B == 0) {
            return 0;
        }
        if ($A == 1) {
            return $B;
        }
        if ($B == 1) {
            return $A;
        }
        $ans = 0;
        if ($A >= $B) {
            $ans = $this->multiply($A, $B - 1) + $A;
        }
        if ($A < $B) {
            $ans = $this->multiply($A - 1, $B) + $B;
        }

        return $ans;
    }
}

$test = new Solution();

var_dump($test->multiply(10,3));