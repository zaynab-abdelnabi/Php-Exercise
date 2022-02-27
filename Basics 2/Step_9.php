<?php 
function square_root($n){
    $x = $n;
    $y = 1;
    while($x > $y)
    {
      $x = ($x + $y)/2;
      $y = $n/$x;
    }
    return $x;
}


echo square_root(36);

?>
