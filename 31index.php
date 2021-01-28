<?php
    $age = array(
        "bill" => 25,
        'steve' => 28,
        'elon' => 22
    );
    $age['elon'] = 20;

    foreach ($age as $key => $value) {
        echo "$key = $value <br>";
    }

?>