<?php
// array_shift and array_unshift

    $fruit = ['orange','banana','grapes'];

    array_shift($fruit); //banana,grapes
    array_unshift($fruit,'mango'); // mango,banana,grapes
    print_r($fruit);
    

?>