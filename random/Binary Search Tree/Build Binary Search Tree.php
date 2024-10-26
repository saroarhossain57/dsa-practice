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

    public function inorder_traversal($root) {

        if($root == null) {
            return;
        }

        $this->inorder_traversal($root->left);
        echo $root->value . " ";
        $this->inorder_traversal($root->right);
    }
}



$arr = [5, 1, 3, 4, 2, 7];

$binary_search_tree = new BinarySearchTree();
$root = $binary_search_tree->buildTree($arr);

echo "Inorder Traversal: ";
$binary_search_tree->inorder_traversal($root);