<?php
// Array count and sizeof function
    $food = array('orange', 'banana','apple');
    echo count($food)."<br>"; // 3

    $foods = array(
        'fruits' =>['orange','banana','apple'],
        'veggie' =>['carrot','collard','pea']
    );

    echo count($foods)."<br>"; //2
    echo sizeof($foods)."<br>"; //2
    echo count($foods,1)."<br>"; //8
    echo count($foods['fruits'],1)."<br>"; //3

?>