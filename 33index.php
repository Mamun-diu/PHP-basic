<?php
    $marks = [
        "Krishana" =>[
            "physics" => 85,
            'maths' => 78,
            'chemistry' => 89
        ],
        'Salman' =>[
            "physics" => 68,
            'maths' => 75,
            'chemistry' => 79
        ],
        'Mohan' =>[
            "physics" => 62,
            'maths' => 67,
            'chemistry' => 92
        ]
    ];
    echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>Name</th>
            <th>Physics</th>
            <th>Maths</th>
            <th>Chemistry</th>
        </tr>
    ";

    foreach ($marks as $key => $v1) {
        echo "<tr><td>$key</td>";
        foreach ($v1 as $v2) {
            echo "<td>$v2</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<pre>";
    print_r($marks);
    echo "</pre>";

?>