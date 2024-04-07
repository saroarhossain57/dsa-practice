<?php

class TreeNode {
    public $value;
    public $children = [];

    public function __construct($value)
    {
        $this->value = $value;
    }


    public function add_child(TreeNode $node) {
        $this->children[] = $node;
    }
}


class Tree {

    public $root;

    public function __construct(TreeNode $node) {
        $this->root = $node;
    }

    public function traverse(TreeNode $node, int $level = 0){
        if ($node) {
            echo str_repeat("-", $level);
            echo $node->value . "\n";

            foreach ($node->children as $childNode) {
                $this->traverse($childNode, $level + 1);
            }
        }
    }
}


$ceo = new TreeNode('CEO');
$cto = new TreeNode('CTO');
$cfo = new TreeNode('CFO');
$cmo = new TreeNode('CMO');

$ceo->add_child($cto);
$ceo->add_child($cfo);
$ceo->add_child($cmo);

$senior_software_engineer = new TreeNode('Senior Software Engineer');
$cto->add_child($senior_software_engineer);

$junior_software_engineer = new TreeNode('Junior Software Engineer');
$cto->add_child($junior_software_engineer);

$tree = new Tree($ceo);


$tree->traverse($tree->root);