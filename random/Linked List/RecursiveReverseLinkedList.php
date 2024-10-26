<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function isEmpty() {
        return $this->head === null;
    }

    public function insert($data) {
        $newNode = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function display() {
        if ($this->isEmpty()) {
            echo "The linked list is empty.\n";
            return;
        }
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "NULL\n";
    }

    public function recursive_revers($head) {

        if($head === null || $head->next === null){
            return $head;
        }

        $new_head = $this->recursive_revers($head->next);
        $head->next->next = $head;
        $head->next = null;

        return $new_head;
    }

    public function get_head(){
        return $this->head;
    }
}



// Create a new linked list
$linkedList = new LinkedList();

// Insert some elements
$linkedList->insert(1);
$linkedList->insert(2);
$linkedList->insert(3);
$linkedList->insert(4);



// Display the linked list
$linkedList->display();


$linkedList->recursive_revers($linkedList->get_head());


// Display the linked list
$linkedList->display();