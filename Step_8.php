<?php
$grocery = ["Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon"];

echo "Hello Sir, do you have " . $grocery[0] . ", " . $grocery[1] . ", and " . $grocery[2] . "? Also if you sell fruits can I find a " . $grocery[sizeof($grocery) - 1] . "?\n";

$grocery1 = ["Eggs" => ['balade', 'mazare3'], "Milk" => ['Fresh', 'Taanayel'], "water-pack" => ['Tanoureen' ,'Reem']];

echo "Hey Sir, Please I need 1 pack of ".$grocery1["Eggs"][0]." eggs and 3 ".$grocery1["water-pack"][1] ." Water Pack.\n"

?>
