<?php

class Edge {
    public int $src;
    public int $dest;

    public function __construct(int $src, int $dest) {
        $this->src = $src;
        $this->dest = $dest;
    }
}

class Vertix {
    public string $name;
    public array $edges;

    public function __construct(string $name) {
        $this->name = $name;
        $this->edges = [];
    }

    public function addEdge(Edge $edge) {
        $this->edges[] = $edge;
    }
}

class Graph {
    public array $adjList;

    public function __construct() {
        $this->adjList = [];
    }

    public function addVertix(Vertix $vertix) {
        $this->adjList[$vertix->name] = $vertix; 
    }
}

$graph = new Graph();

// Create vertix Gazipur
$gazipur = new Vertix('Gazipur');
