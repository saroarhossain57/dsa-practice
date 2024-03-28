<?php

// Checking whether the list is empty

// Displaying all items in the list

// Searching an item in the list

// Getting the size of the list

// Inserting a new item at the beginning or end of the list

// Removing an item from the beginning or end of the list

// Inserting a new item at a specific place or before/after an item

// Reversing a list

class ListNode {
    public $data;
    public $next = null;

    public function __construct($data = null)
    {
        $this->data = $data;
    }
}


class LinkedList {
    private $head = null;
    private $total_nodes = 0;

    public function insert(string $data = null){

        $node = new ListNode($data);
        if($this->is_empty()){
            $this->head = &$node;
        } else {
            $current = $this->head;
            while($current->next != null){
                $current = $current->next;
            }
            $current->next = &$node;
        }

        $this->total_nodes++;
        return true;
    }

    public function is_empty(){
        return $this->head === null;
    }

    public function display(){
        $current = $this->head;
        while($current != null){
            echo $current->data . "\n";
            $current = $current->next;
        }
    }

    public function get_first_item(){
        return $this->head;
    }
}

$linkedList = new LinkedList();

$linkedList->insert("Saroar");
$linkedList->insert("Hossain");
$linkedList->insert("Limon");

var_dump($linkedList->get_first_item());

$linkedList->display();