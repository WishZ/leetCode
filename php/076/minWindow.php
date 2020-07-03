<?php

class Solution
{

    /**
     * 给你一个字符串 S、一个字符串 T，请在字符串 S 里面找出：包含 T 所有字母的最小子串。
     *
     * 输入: S = "ADOBECODEBANC", T = "ABC"
     * 输出: "BANC"
     *
     * 滑动窗口法  参考 https://blog.csdn.net/Dby_freedom/article/details/89066140
     * @param string $s
     * @param string $t
     *
     * @return string
     */
    public function minWindow(string $s, string $t)
    {
        $window = [];
        $target = [];
        $len    = strlen($s);

        for ($i = 0; $i < $len; $i++) {
            $target[$s[$i]] = isset($target[$s[$i]]) ? $target[$s[$i]]++ : 1;
        }

        $left  = 0;
        $right = 0;

        $windowCnt = 0;
        $start     = 0;
        $minLen    = $len + 1;

        while ($right < $len) {
            if ($target[$s[$right]]) {
                $window[$s[$right]] = isset($window[$s[$right]]) ? $window[$s[$right]]++ : 1;
                if ($window[$s[$right]] == $target[$s[$right]]) {
                    $windowCnt++;
                }
            }
            $right++;
            while ($windowCnt == count($target)) {
                if ($right - $left < $minLen) {
                    $start  = $left;
                    $minLen = $right - $left;
                }
                $temp = $s[$left];

                if ($target[$temp]) {
                    $window[$temp]--;
                    if ($window[$temp] < $target[$temp]) {
                        $windowCnt--;
                    }
                }
                $left++;
            }
        }
        return $minLen == $len + 1 ? "" : substr($s, $start, $minLen);
    }
}

$obj = new Solution();
var_dump($obj->minWindow('ADOBECODEBANC','ABC'));
