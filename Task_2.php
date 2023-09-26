<?php


function removeEvenNumbers($numbers) {
    $oddNumbers = array(); 

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }

    return $oddNumbers;
}

$numbers = range(1, 10);
$oddNumbers = removeEvenNumbers($numbers);

print_r($oddNumbers);
















?>