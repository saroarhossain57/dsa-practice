<?php

class TreeNode {
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value){
        $this->value = $value;
    }
}

class MyBinaryTree {
    
    public $root;

    public static $index = -1;

    public function buildTree(array $tree_arr): TreeNode|null {
        self::$index++;

        if ($tree_arr[self::$index] == -1) {
            return null;
        }

        $newNode = new TreeNode($tree_arr[self::$index]);
        $newNode->left = $this->buildTree($tree_arr);
        $newNode->right = $this->buildTree($tree_arr);

        return $newNode;
    }

    public function preoder_traversal($node) {

        if($node == null) {
            return;
        }

        echo $node->value . " ";
        $this->preoder_traversal($node->left);
        $this->preoder_traversal($node->right);
    }

}


$tree_arr = [1, 2, 4, -1, -1, 5, -1, -1, 3, -1, 6, -1, -1];
$binaryTree = new MyBinaryTree();
$root = $binaryTree->buildTree($tree_arr);

echo $root->value . "\n";

$binaryTree->preoder_traversal($root);
