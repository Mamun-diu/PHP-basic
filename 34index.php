<?php
    $emp = [
        [1,'krishna','manager',50000],
        [2, 'Salman','Salesman', 20000],
        [3, 'Mohan', 'Computer Operator',12000],
        [4,'Amir','Driver',5000]
    ];
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
    ";
    foreach($emp as list($id,$name,$designation,$salary)){
        echo "<tr><td>$id</td><td>$name</td><td>$designation</td><td>$salary</td></tr>";
    }
    echo "</table>";



    // Output: 
    // Id	Name	Designation	Salary
    // 1	krishna	manager	50000
    // 2	Salman	Salesman	20000
    // 3	Mohan	Computer Operator	12000
    // 4	Amir	Driver	5000

?>