<?php

class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function maxArea($height)
    {
        // $count = count($height);
        // $result = [];
        // for ($i = 0; $i < $count; $i++) {
        //     for ($j = $i; $j < $count; $j++) {
        //         $h = min($height[$j],$height[$i]);
        //         $w = $j - $i;
        //         $result[] = $w * $h;
        //     }
        // }

        // return max($result);

        $i   = 0;
        $j   = count($height) - 1;
        $res = 0;
        while ($i < $j) {
            if ($height[$i] < $height[$j]) {
                $res = max($res, $height[$i] * ($j - $i));
                $i += 1;
            } else {
                $res = max($res, $height[$j] * ($j - $i));
                $j -= 1;
            }
        }

        return $res;
    }
}
