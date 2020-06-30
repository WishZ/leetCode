<?php

class CQueue
{
    private $stack1;

    private $stack2;

    /**
     */
    public function __construct()
    {
        $this->stack1 = new SplStack();
        $this->stack2 = new SplStack();
    }

    /**
     * @param Integer $value
     * @return NULL
     */
    public function appendTail($value)
    {
        $this->stack1->push($value);
    }

    /**
     * @return Integer
     */
    public function deleteHead()
    {
        if ($this->stack2->isEmpty()) {
            while ($this->stack1->isEmpty() === false) {
                $this->stack2->push($this->stack1->pop());
            }
        }

        if ($this->stack2->isEmpty()) {
            return -1;
        }
        return $this->stack2->pop();
    }
}

/**
 * Your CQueue object will be instantiated and called as such:
 * $obj = CQueue();
 * $obj->appendTail($value);
 * $ret_2 = $obj->deleteHead();
 */
