<?php

/**
 * Class Solution
 *
 * 哦，不！你不小心把一个长篇文章中的空格、标点都删掉了，并且大写也弄成了小写。
 * 像句子"I reset the computer. It still didn’t boot!"已经变成了"iresetthecomputeritstilldidntboot"。
 * 在处理标点符号和大小写之前，你得先把它断成词语。
 * 当然了，你有一本厚厚的词典dictionary，不过，有些词没在词典里。
 * 假设文章用sentence表示，设计一个算法，把文章断开，要求未识别的字符最少，返回未识别的字符数。
 *
 * https://leetcode-cn.com/problems/re-space-lcci/
 */
class Solution {

    /**
     * @param String[] $dictionary
     * @param String $sentence
     * @return Integer
     */
    function respace($dictionary, $sentence) {
        var_dump(sort($dictionary));
        $str = str_replace($dictionary, "", $sentence);
        return strlen($str);
    }
}

$obj = new Solution();
$res = $obj->respace(["looked","just","like","her","brother"],"jesslookedjustliketimherbrother");

var_dump($res);
