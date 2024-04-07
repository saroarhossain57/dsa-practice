<?php

class Node {

    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }

    public function add_child(Node $left, Node $right) {
        $this->left = $left;
        $this->right = $right;
    }
}

class BinaryTree {
    public $root = null;

    public function __construct(Node $root) {
        $this->root = $root;
    }

    public function traverse(Node $node, $level = 0) {
        if ($node) {
            echo str_repeat("-", $level);
            echo $node->data . "\n";
            if ($node->left)
                $this->traverse($node->left, $level + 1);
            if ($node->right)
                $this->traverse($node->right, $level + 1);
        }
    }
}


$final = new Node("Final");
$tree = new BinaryTree($final);
$semiFinal1 = new Node("Semi Final 1");
$semiFinal2 = new Node("Semi Final 2");
$quarterFinal1 = new Node("Quarter Final 1");
$quarterFinal2 = new Node("Quarter Final 2");
$quarterFinal3 = new Node("Quarter Final 3");
$quarterFinal4 = new Node("Quarter Final 4");
$semiFinal1->add_child($quarterFinal1, $quarterFinal2);
$semiFinal2->add_child($quarterFinal3, $quarterFinal4);
$final->add_child($semiFinal1, $semiFinal2);
$tree->traverse($tree->root);