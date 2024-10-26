<?php

class Node {
    public $data;
    public $next = null;

    public function __construct($data){
        $this->data = $data;
    }
}

class LinkedList {

    public $head = null;

    public function insert($data){

        $new_node = new Node($data);
        if($this->head == null){
            $this->head = $new_node;
        } else {
            $new_node->next = $this->head;
            $this->head = $new_node;
        }
    }

    public function get_head(){
        return $this->head;
    }

    public function pop_item(){

        if($this->head == null){
            return null;
        } else {
            $current = $this->head;
            $this->head = $this->head->next;
            return $current;
        }
    }
}

class Books {

    private $stack;

    public function __construct(){
        $this->stack = new LinkedList();
    }

    public function push($data){
        $this->stack->insert($data);
    }

    public function pop(){

        if($this->stack->get_head() == null){
            return null;
        } else {
            return $this->stack->pop_item();
        }
    }

    public function top(){

        if($this->stack->get_head() == null){
            return null;
        } else {
            return $this->stack->get_head()->data;
        }
    }

    public function isEmpty(){
        return $this->stack->get_head() == null;
    }
}

$books = new Books();
$books->push('C++');
$books->push('Java');
$books->push('Python');

$books->pop();

echo $books->top();