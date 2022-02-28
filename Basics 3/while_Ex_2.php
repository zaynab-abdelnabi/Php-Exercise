<?php
    function factorial($n){
        $x=$n;
        $product=1;
        while($x>=1){
            $product *= $x;
            $x--;
        }
        return $product;
    }
echo factorial(4);