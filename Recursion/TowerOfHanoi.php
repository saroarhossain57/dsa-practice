<?php

function towerofHanoi($n, $from, $hel, $des) {

    if($n == 1) {
        echo "Moving disk 1 from " . $from . " to " . $des . "\n";
        return;
    }
    
    towerofHanoi($n - 1, $from, $des, $hel);
    echo "Moving disk " . $n . " from " . $from . " to " . $des . "\n";
    towerofHanoi($n - 1, $hel, $from, $des);
}


towerofHanoi(5, 'A', 'B', 'C');
