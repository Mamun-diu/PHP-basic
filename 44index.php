<?php
// array rand and shuffle

$color = ['red', 'green', 'blue', 'yellow', 'brown'];

$newArray = array_rand($color);
echo $color[$newArray]."<br>";
shuffle($color);
print_r($color);


?>