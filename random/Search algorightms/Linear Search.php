<?php

function search($numbers, $needle) {
    $totalItems = count($numbers);

    $loop = 0;

    for ($i = 0; $i < $totalItems; $i++) {
        if($numbers[$i] === $needle){
            return $numbers[$i];
            break;
        }

        $loop++;
    }

    return false;
}

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
echo search($arr, 45);