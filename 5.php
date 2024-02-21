<?php

function karakterPalingBanyak($string){
    $counts = [];
    for ($i = 0; $i < strlen($string); $i++){
        $char = strtolower($string[$i]);
        if (!isset($counts[$char])){
            $counts[$char] = 0;
        }
        $counts[$char]++;
    }

    $maxCount = 0;
    $mostFrequentChar = '';
    foreach($counts as $char => $count){
        if($count > $maxCount){
            $maxCount = $count;
            $mostFrequentChar = $char;
        }
    }

    return "$mostFrequentChar $maxCount" . (count($counts) > 1 ? 'x' : '');
}

$string = "welcome";
$result = karakterPalingBanyak($string);
echo "Karakter Paling Banyak muncul: $result <br>";

$string = "Hello World";
$result = karakterPalingBanyak($string);
echo "Karakter Paling Banyak muncul: $result <br>";