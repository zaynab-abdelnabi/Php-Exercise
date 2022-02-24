<?php 
$num=153;  
$sum=0;
$var=$num;
 
while($var!=0)
{
$digit=$var%10;
$sum=$sum+ $digit**3 ;
$var=$var/10;
}
 
if($num==$sum) echo "$num is an Armstrong Number.";
else echo "$num is not an Armstrong Number.";
?>