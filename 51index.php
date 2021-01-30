<?php
// String uppercase and lowercase

$str = 'Al Mamun';

$lowerStr = strtolower($str);
echo $lowerStr."<br>";

$upperStr = strtoupper($str);
echo $upperStr ."<br>";

$lcStr = lcfirst($str);
echo $lcStr ."<br>";

$ucStr = ucfirst($str);
echo $ucStr ."<br>";

$ucWords = ucwords($str);
echo $ucWords ."<br>";


?>