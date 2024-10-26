<?php


function insertionSort(&$arr){

    $n = count($arr);
    $loop = 0;

    for ($i = 1; $i < $n; $i++){
        $key = $arr[$i];
        $j = $i-1;
     

        while ($j >= 0 && $arr[$j] > $key){
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;

            $loop++;
        }
         
        $arr[$j + 1] = $key;
    }

    echo "Loop: " . $loop . "\n";
}


$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
insertionSort($arr);
echo implode(",", $arr);