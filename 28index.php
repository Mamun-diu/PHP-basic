<?php
    $x = 15;
    $y = 10;
    function test(){
        global $x, $y;
        echo "Variable X inside function : ". ($x+$y)."<br>";
    }
    test();
    echo "Variable X outside function : $x<br>";
    
?>