<?php

class ListNode {
    public $data;
    public $next = null;

    public function __construct($data = null){
        $this->data = $data;
    }
}


class LinkedList {

    private $head = null;
    private $nodes_count = 0;


    public function insert(string $data){
        $new_node = new ListNode($data);
        if($this->is_empty()){
            $this->head = $new_node;
        } else {
            $current = $this->head;

            while($current->next != null){
                $current = $current->next;
            }

            $current->next = $new_node;
        }

        $this->nodes_count++;
        return true;
    }

    public function insert_first($data){

        $new_node = new ListNode($data);
        if($this->is_empty()){
            $this->head = $new_node;
        } else {
            $prev_head = $this->head;
            $new_node->next = $prev_head;
            $this->head = $new_node;
        }

        $this->nodes_count++;
        return true;
    }

    public function search_by_value( $data ): ListNode | string{

        // check if the list is empty
        if($this->is_empty()){
            return 'List is empty';
        }

        $current = $this->head;
        while($current != null){

            if($current->data == $data){
                return $current;
            }
            $current = $current->next;
        }

        return 'Data not found';
    }

    public function is_empty(){
        return $this->head == null;
    }

    public function insert_before_element($data, $elem): bool{

        $new_node = new ListNode($data);

        $current = $this->head;
        $prev = null;

        while($current != null){

            if($current->data == $elem){

                if($prev){
                    $prev->next = $new_node;
                    $new_node->next = $current;
                } else {
                    $this->head = $new_node;
                    $new_node->next = $current;
                }

            }

            $prev = $current;
            $current = $current->next;
        }

        return false;
    }

    public function get_item_by_position($position){
        
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
$linkedList->insert(4);
$linkedList->insert(5);

// $linkedList->insert_before_element(8, 3);
// $linkedList->insert_before_element(8, 1);

$linkedList->display();

// $linkedList->search_by_value(5);
// echo $searched->data;
