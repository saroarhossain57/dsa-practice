<?php

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

function traversal(array $arr): void {

    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        echo $arr[$i] . "\n";
    }
}

traversal($arr);