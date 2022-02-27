<?php 

function check_palindrome($string){
    if($string == strrev($string)){
        return "$string is palindrome";
    }
    else{
        return "$string is not palindrome";
    }
}

echo check_palindrome("madam");

?>