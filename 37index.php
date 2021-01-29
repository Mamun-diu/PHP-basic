<?php
// array_replace()
    
    $fruit = ['orange', 'banana', 'apple', 'grapes'];
    $veggie = ['carrot','pea'];

    $newArray = array_replace($fruit, $veggie);
    echo "<pre>";
    print_r($newArray);
    echo"</pre>";

    $fruit2 = ['orange', 'banana', 'apple', 'grapes'];
    $veggie2 = ['a'=>'carrot','b'=>'pea'];

    $newArray2 = array_replace($fruit2, $veggie2);
    echo "<pre>";
    print_r($newArray2);
    echo"</pre>";

?>