<?php

interface Queue {
    public function enqueue($data);
    public function dequeue();
    public function peek();
    public function isEmpty();
}

class AgentQueue implements Queue{

    private $queue;
    public $limit;

    public function __construct($limit = 50){
        $this->limit = $limit;
        $this->queue = new SplQueue();
    }

    public function enqueue($data){
        $this->queue->enqueue($data);
    }

    public function dequeue(){
        return $this->queue->dequeue();
    }

    public function peek(){
        return $this->queue->bottom();
    }

    public function isEmpty(){
        
    }
}


$agentQueue = new AgentQueue();
$agentQueue->enqueue('C++');
$agentQueue->enqueue('Java');
$agentQueue->enqueue('Python');

var_dump($agentQueue->peek());










main();
console.log(a);


function main(){

    // base case
    if(num == 10){
        return;
    }

    main();
}