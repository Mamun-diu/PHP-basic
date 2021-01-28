<?php
    // $colors = array('red',20,'blue',12.50);
    // $colors = ['red',20,'blue',12.50];

    // echo $colors[0]."<br>";
    // echo $colors[1]."<br>";
    // echo $colors[2]."<br>";
    // echo $colors[3]."<br>";
    $colors[] = "red";
    $colors[] = "green";
    $colors[] = 20;
    $colors[] = "blue";
    $colors[] = 12.50;

    for($i = 0; $i <= 4; $i++){
        echo $colors[$i]."<br>";
    }

    echo "<pre>";
    print_r($colors);
    echo "<pre>";

?>