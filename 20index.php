<?php
    
    for($a=1; $a <= 10; $a++){
        if($a == 3){
            continue;
        }elseif($a == 7){
            break;
        }
        echo "Number : " .$a ."<br>";
    }
    
?>