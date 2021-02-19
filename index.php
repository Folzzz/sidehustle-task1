<?php
    // no of digits on pin
    $noOfDigits = 16;

    for ($i=0; $i < 250; $i++) { 
        // generate pin using random function
        $generatePin = rand(pow(10, $noOfDigits-1), pow(10, $noOfDigits)-1);

        echo $generatePin .'<br>';
    }

?>