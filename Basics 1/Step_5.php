<?php
$course_name= "Web Development";
$enrolled_students = 35;
$price = 29.99;
$on_discount = true;

echo "
Course title: ${course_name}
Enrolled Students: ${enrolled_students}
Course price: ${price} $ USD
Course on discount: ".($on_discount ? "Yes\n" : "No\n");
?>