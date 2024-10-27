<?php

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

function search_item(array $arr, mixed $item): mixed {

    $count = count($arr);
    for ( $i = 0; $i < $count; $i++) {
        if ($arr[$i] === $item) {
            return $i;
        }
    }

    return false;
}

echo search_item($arr, 10);