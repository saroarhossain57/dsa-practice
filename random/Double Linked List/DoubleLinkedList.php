<?php

class ListNode {

    public $data;
    public $next;
    public $prev;

    public function __construct($data){
        $this->data = $data;
    }
}


class DoubleLinkedList {

    public $head = null;
    public $tail = null;

    public function insert($data){

        $new_node = new ListNode($data);
        if($this->head == null){
            $this->head = $new_node;
            $this->tail = $new_node;
        } else {

            $this->tail->next = $new_node;
            $this->tail = $new_node;


        }

    }

    public function insert_first($data){

        $new_node = new ListNode($data);
        $new_node->next = $this->head;
        $this->head = $new_node;
    }

    public function display(){
        $current = $this->head;

        while($current != null){
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }

}

$doubleLinkedList = new DoubleLinkedList();

$doubleLinkedList->insert(1);
$doubleLinkedList->insert(2);
$doubleLinkedList->insert(3);
$doubleLinkedList->insert(4);
$doubleLinkedList->insert(5);
$doubleLinkedList->insert(6);
$doubleLinkedList->insert(7);
$doubleLinkedList->insert_first(8);

$doubleLinkedList->display();