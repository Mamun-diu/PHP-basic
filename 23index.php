<?php
    function hello($fname="first", $lname="last"){
        echo "Hello $fname $lname.<br>";
    }

    function sum($a, $b){
        echo $a + $b;
    }

    hello('Al','Mamun');
    hello();
    hello('Bill','Gates');

    sum(10,20);
    
?>