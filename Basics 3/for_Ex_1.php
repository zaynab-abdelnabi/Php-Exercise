<?php

function sum_of_digits($n){
    $sum =0;
    for($i=0;$i<strlen($n);$i++){
        $sum += $n[$i];
    }
    return $sum;
}

echo sum_of_digits("123456");