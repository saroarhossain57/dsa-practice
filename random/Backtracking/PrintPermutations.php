<?php

// function printPermutation($str){

// }


// function permute($str) {

//     $stack = array(array('', $str));

//     while (!empty($stack)) {
//         list($prefix, $remaining) = array_pop($stack);

//         $remainingLength = strlen($remaining);

//         if ($remainingLength == 0) {
//             echo $prefix . "\n";
//         } else {
//             for ($i = 0; $i < $remainingLength; $i++) {
//                 $newPrefix = $prefix . $remaining[$i];
//                 $newRemaining = substr($remaining, 0, $i) . substr($remaining, $i + 1);
//                 $stack[] = array($newPrefix, $newRemaining);
//             }
//         }
//     }
// }

// // Example usage:
// $string = "abcd";
// permute($string);


function print_Permutation($str) {

    $n = strlen($str);

    for($i = 0; $i < $n; $i++){


        $prefix = $str[$i];
        $remain = substr_replace($str, '', $i, 1);
        $remain_len = strlen($remain);

        for($j = 0; $j < $remain_len; $j++){

            $compare_char = $remain[$j];

            for($k = 0; $k < $remain_len; $k++){

                $temp = $remain;
                $out = $temp[$k];
                $temp[$k] = $compare_char;
                $temp[$j] = $out;

                echo $prefix . $temp . "\n";
            }


        }

        // $compared = $str[$i];
        // $temp = $str;
        // for($j = 0; $j < $n; $j++){

        //     $temp = $str;

        //     $out = $temp[$j];
        //     $temp[$j] = $compared;
        //     $temp[$i] = $out;
        //     echo $temp . "\n";
        // }

    }
}

print_Permutation("abcd");