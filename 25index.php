<?php
    // Pass by value
    function testing($string){
        $string .= "and something extra.";
    }

    $str = "This is a string";
    testing($str);
    echo $str."<br>";

    //Pass by reference
    function testing2(&$string){
        $string .= "and something extra.";
    }

    $str2 = "This is a string";
    testing2($str2);
    echo $str2;
    
?>