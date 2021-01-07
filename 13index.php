<?php
    $weakday = 2;

    
    switch ($weakday) {
        case '1':
            echo "Today is Thursday";
            break;
        case '2':
            echo "Today is Friday";
            break;
        case '3':
            echo "Today is Saturday";
            break;
        case '4':
            echo "Today is Sunday";
            break;
        case '5':
            echo "Today is Monday";
            break;
        case '6':
            echo "Today is Tuesday";
            break;
        case '7':
            echo "Today is Friday";
            break;
        default:
            echo "Enter the valid weak day";
            break;
    }
?>