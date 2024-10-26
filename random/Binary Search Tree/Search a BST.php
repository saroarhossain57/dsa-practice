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

    public function search($root, $value): bool {
        if($root == null) {
            return false;
        }
        if($root->value == $value) {
            return true;
        }
        if($value < $root->value) {
            return $this->search($root->left, $value);
        } else {
            return $this->search($root->right, $value);
        } 
    }
}



$arr = [5, 1, 3, 4, 2, 7];

$binary_search_tree = new BinarySearchTree();
$root = $binary_search_tree->buildTree($arr);

echo $binary_search_tree->search($root, 9) ? "Found" : "Not Found";

