<?php
    $emp = [
        [1,'krishna','manager',50000],
        [2, 'Salman','Salesman', 20000],
        [3, 'Mohan', 'Computer Operator',12000],
        [4,'Amir','Driver',5000]
    ];

    for($row = 0; $row < 4; $row++){
        for($col = 0; $col < 4; $col++){
            echo $emp[$row][$col]." ";
        }
        echo "<br>";
    }

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

?>