<?php
    $age = 15;

    if($age >=18 && $age <=21){
        echo "You are eligible.<br>";
    }
    if($age >=18 || $age <=21){
        echo "You are eligible.<br>";
    }

    if(!($age >= 18)){
        echo "You are not eligible";
    }
?>