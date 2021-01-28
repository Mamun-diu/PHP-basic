<?php
    function wow($name){
        echo "Hello $name <br>";
    }

    $func = "wow";
    $func("Al-Mamun");

    //second method of variable function
    $sayHello = function ($name){
        echo "Hi $name <br>";
    };

    $sayHello("Al-Mamun");
    
?>