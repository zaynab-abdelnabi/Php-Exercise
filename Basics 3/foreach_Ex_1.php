<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

function find_absolute($transactions){
    foreach($transactions as $arr){
        echo "ID: ". $arr["id"]. " => amount: ". abs($arr["debit"] - $arr["credit"])."\n";
    }
}

find_absolute($transactions);