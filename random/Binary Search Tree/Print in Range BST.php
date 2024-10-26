<?php

class TreeNode {

    public $value;
    public $left;
    public $right;

    public function __construct($value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {

    public $root = null;

    public function insert($root, $value) {
        if($root == null) {
            $root = new TreeNode($value);
            return $root;
        }

        if($value < $root->value) {
            $root->left = $this->insert($root->left, $value);
        } else {
            $root->right = $this->insert($root->right, $value);
        }

        return $root;
    }

    public function buildTree(array $tree_arr) {
        foreach($tree_arr as $value) {
            $this->root = $this->insert($this->root, $value);
        }

        return $this->root;
    }

    public function printInRange($root, $min, $max) {
        
        if($root == null) {
            return;
        }

        if($root->value >= $min && $root->value <= $max) {
            $this->printInRange($root->left, $min, $max);
            echo $root->value . " ";
            $this->printInRange($root->right, $min, $max);
        } elseif($root->value < $min) {
            $this->printInRange($root->right, $min, $max);
        } else {
            $this->printInRange($root->left, $min, $max);
        }

    }
}



$arr = [8, 5, 3, 1, 4, 6, 10, 11, 14];

$binary_search_tree = new BinarySearchTree();
$root = $binary_search_tree->buildTree($arr);

$binary_search_tree->printInRange($root, 7, 20);
