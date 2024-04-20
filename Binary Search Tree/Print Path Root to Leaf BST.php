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

    public $paths = array();

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

    public function print_root_to_leaf_paths($root) {

        if($root == null) {
            return;
        }

        array_push($this->paths, $root->value);

        if($root->left == null && $root->right == null) {
            $this->print_paths($this->paths);
        } else {
            $this->print_root_to_leaf_paths($root->left);
            $this->print_root_to_leaf_paths($root->right);
        }

        array_pop($this->paths);
    }

    public function print_paths(array $paths) {
        echo implode(" -> ", $paths) . "\n";
    }
}



$arr = [8, 5, 3, 1, 4, 6, 10, 11, 14];

$binary_search_tree = new BinarySearchTree();
$root = $binary_search_tree->buildTree($arr);
$binary_search_tree->print_root_to_leaf_paths($root);


