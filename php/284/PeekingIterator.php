<?php


class PeekingIterator {

    private $arr;

    private $cur;
    /**
     * @param ArrayIterator $arr
     */
    function __construct($arr) {
        $this->arr = $arr;
        $this->cur = null;
    }

    /**
     * @return Integer
     */
    function next() {
        if ($this->cur != null) {
            $res = $this->cur;
            $this->cur = null;
            return $res;
        }

        return $this->arr->next();
    }

    /**
     * @return Integer
     */
    function peek() {
        if ($this->cur != null) {
            return $this->cur;
        }

        $this->cur = $this->arr->next();

        return $this->cur;
    }

    /**
     * @return Boolean
     */
    function hasNext() {
        return $this->cur != null || $this->arr->hasNext();
    }
}

/**
 * Your PeekingIterator object will be instantiated and called as such:
 * $obj = PeekingIterator($arr);
 * $ret_1 = $obj->next();
 * $ret_2 = $obj->peek();
 * $ret_3 = $obj->hasNext();
 */