<?php
// array_merge and array_combine

$fruit = ['orange', 'banana', 'grapes'];
$veggie = ['carrot','pea'];
$color = ['red','blue'];

$newArray = array_merge($fruit, $veggie, $color);
print_r($newArray);

$name = array('Ram','Mohan','Salman');
$age = array('35','37','43');

$new = array_combine($name,$age);
echo "<br>";
print_r($new);

    

?>