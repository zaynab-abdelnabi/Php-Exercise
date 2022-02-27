<?php 

function count_word_in($word,$text){
    $arr = explode($word, $text);
    $count = count($arr) -1 ;
    return "The word \"$word\" counted $count times";
}
echo count_word_in("Zaynab", "hello Zaynab, how are you Zaynab");

?>