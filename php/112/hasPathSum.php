<?php

class TreeNode
{
    public $val   = null;
    public $left  = null;
    public $right = null;
    public function __construct($value)
    {
        $this->val = $value;
    }
}

/**
 * Definition for a binary tree node.
 */
class Solution
{

    /**
     * @param TreeNode $root
     * @param Integer $sum
     * @return Boolean
     */
    public function hasPathSum($root, $sum)
    {
        if (!$root) {
            return false;
        }
        $sum -= $root->val;

        if ($root->left == null && $root->right == null) {
            return $sum == 0;
        }
        return $this->hasPathSum($root->left, $sum) || $this->hasPathSum($root->right, $sum);
    }
}
