<?php
// array range

$newArray = range(1,10,2);
echo "<pre>";
print_r($newArray);

$newArray2 = range('a','f');
echo "<pre>";
print_r($newArray2);

foreach(range('h','a') as $letter){
    echo $letter ."<br>";
}


?>