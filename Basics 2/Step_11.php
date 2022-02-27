<?php 

function isPrime($n){
    for($x=2; $x<$n ; $x++){
        if($n%$x==0){
            return "$n is not a prime number";
        }
    }
    return "$n is a prime number";
}

echo isPrime(13);

?>