<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);


function show_data($transactions){
    foreach($transactions as $arr){
        foreach($arr as $key => $value ){
            echo $key . " : " .$value. ", ";
        }
        echo "\n";
    }
}

show_data($transactions);