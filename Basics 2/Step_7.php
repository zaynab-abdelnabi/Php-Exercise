<?php

$var = "Python";

function replace_to_PHP($var)
{
  if (strlen($var) > 1000) return $var;
  $var = str_replace("Python", "PHP", $var);
  return $var;
}

echo replace_to_PHP($var);

?>