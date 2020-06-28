<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows == 1) {
            return $s;
        }
        $result = [];
        $n = strlen($s);
        for ($i = 0;$i < $numRows;$i++) {
            for ($j = $i;$j<$n;$j += ($numRows - 1) *2) {
                    $result[] = $s[$j];
                    if ($i >0 && $i < $numRows - 1) {
                        $sec = $j +2 *($numRows - $i -1);
                        if ($sec < $n) {
                            $result[] = $s[$sec];
                        }
                    }
            }
        }
        return implode('',$result);
    }
}

$obj = new Solution();
var_dump($obj->convert('abcdefghijk',3));