<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        //动态规划  定义字符串i 到 j 之间回文 则 i+1 到j-1之间肯定回文 且$s[i] == $s[j] && $s[i+1] == $s[j-1]
        $len = mb_strlen($s);
        if ($len <= 1) {
            return $s;
        }
        $strStart = 0;//回文串的起点
        $strEnd = 0;//回文串的终点
        $strLen = 0;//回文串的长度
        //dp[i][j] 表示i j 这一段是否为回文串
        $dp = array_fill(0, $len, array_fill(0, $len, false));
        for($i = 0; $i < $len; $i++) {
            $dp[$i][$i] = true;
        }
        for($r = 0; $r < $len; $r++) {
            for ($l = 0;$l < $r; $l++) {
                if ($s[$l] == $s[$r] && ($dp[$l+1][$r - 1] || $r -$l < 2)) {
                    $dp[$l][$r] = true;
                    if ($r - $l + 1 > $strLen) {
                        $strLen = $r - $l + 1;
                        $strStart = $l;
                        $strEnd = $r;
                    }
                }
            }
        }

        return substr($s,$strStart,$strEnd - $strLen + 1);
        
    }
}


$ob = new Solution();
$res = $ob->longestPalindrome('aba');

var_dump($res);