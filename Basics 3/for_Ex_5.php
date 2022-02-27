<?php 

function reverse_sentence($sentence){
    $arr1 = explode(" ", $sentence);
    $arr2 = [];
    for( $i=0 ; $i < count($arr1) ; $i++ ){
        $x= count($arr1)-$i-1;
        $arr2[$i] = $arr1[$x];
    }
    return implode(" ", $arr2);
}

echo reverse_sentence("Hello World !");

?>