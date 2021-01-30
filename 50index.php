<?php
// String explode and implode

$str = "Hello world. It's a beautiful day.";

$array = explode(" ",$str);
echo "<pre>";
print_r($array);

$stri = implode(' ',$array);
echo $stri;



?>