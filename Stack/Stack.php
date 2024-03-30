<?php

interface Stack {

    public function push($data);
    public function pop();
    public function top();
    public function isEmpty();
}

class Books implements Stack {

    private $stack = [];
    private $limit;

    public function __construct($limit = 50){
        $this->limit = $limit;
    }

    public function push($data){
        if (count($this->stack) < $this->limit) {
            array_push($this->stack, $data);
        } else {
            throw new OverflowException('Stack is full');
        }
    }

    public function pop(){
        if ($this->isEmpty()) {
            throw new UnderflowException('Stack is empty');
        } else {
            return array_pop($this->stack);
        }
    }

    public function top(){
        return end($this->stack);
    }

    public function isEmpty(){
        return empty($this->stack);
    }

}

$books = new Books();
$books->push('C++');
$books->push('Java');
$books->push('Python');

$books->pop();

echo $books->top();