<?php
// array_splice function

$color = ['red', 'green', 'blue', 'yellow', 'brown'];
// array_splice($color, 1);
// print_r($color); //red
array_splice($color, 2,1);
print_r($color); //red, green, yellow, brown

$newColor = ['red', 'green', 'blue', 'yellow', 'brown'];
$fruit = ['orange', 'apple'];
array_splice($newColor,0,2,$fruit);
echo "<br>";
print_r($newColor);

?>