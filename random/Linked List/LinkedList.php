<?php

class ListNode {
    public $data;
    public $next = null;

    public function __construct($data = null)
    {
        $this->data = $data;
    }
}

class LinkedList {

    public $head = null;

    public function is_empty(){
        return $this->head === null;
    }

    public function insert(string $data = null){

        $newNode = new ListNode($data);

        if($this->is_empty()){
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while($current->next != null){
                $current = $current->next;
            }

            $current->next = $newNode;
        }
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

$linkedList = new LinkedList();
$linkedList->insert(1);
$linkedList->insert(2);
$linkedList->insert(3);
$linkedList->display();