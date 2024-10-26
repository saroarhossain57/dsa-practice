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

    public function delete($root, $value) {

        if($value < $root->value) {
            $root->left = $this->delete($root->left, $value);
        } elseif($value > $root->value) {
            $root->right = $this->delete($root->right, $value);
        } else {

            if($root->left == null && $root->right == null) {
                return null;
            }

            if($root->left == null) {
                return $root->right;
            } elseif($root->right == null) {
                return $root->left;
            }

            $inorder_successor = $this->inorder_successor($root->right);
            $root->value = $inorder_successor->value;
            $root->right = $this->delete($root->right, $inorder_successor->value);
        }

        return $root;
    }

    public function inorder_successor($root) {
        
        while($root->left != null) {
            $root = $root->left;
        }

        return $root;
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



$arr = [8, 5, 3, 1, 4, 6, 10, 11, 14];

$binary_search_tree = new BinarySearchTree();
$root = $binary_search_tree->buildTree($arr);

$binary_search_tree->inorder_traversal($root);

$binary_search_tree->delete($root, 5);

echo "\nAfter deleting 5\n";

$binary_search_tree->inorder_traversal($root);