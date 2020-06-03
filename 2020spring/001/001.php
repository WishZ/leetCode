<?php

class Solution {

    /**
     * @param Integer[] $scores
     * @return Integer
     */
    function expectNumber($scores) {
        return count(array_unique($scores));
    }
}