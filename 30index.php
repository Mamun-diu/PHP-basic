<?php
    $age = array(
        "bill" => 25,
        'steve' => 28,
        'elon' => 22
    );
    $age['elon'] = 20;

    echo $age['bill']."<br>";
    echo $age['steve']."<br>";
    echo $age['elon']."<br>";

?>