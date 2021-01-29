<?php
// in_array() and array_search()
    $food = array('orange','banana','apple','grapes');

    echo in_array('apple',$food)."<br>"; // 1 -> Exist

    if(in_array('apple',$food)){
        echo "Find Successfully<br>";  //Find Successfully
    }else{
        echo "Can't Find.<br>";
    }

    echo array_search('apple',$food); // 2 -> index number

?>