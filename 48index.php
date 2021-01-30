<?php
// array extract

$color = ['a'=>'red','b'=>'green','c'=>'blue'];
extract($color);

echo "Value of a : ". $a ."<br>"; //red
echo "Value of b : ". $b ."<br>"; //green
echo "Value of c : ". $c ."<br>"; //blue



?>