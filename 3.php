<?php

$traficLights = ['Merah', 'Kuning', 'HIjau'];
$currentIndex = 0;

function getTraficLight(){
    global $traficLights, $currentIndex;
    $currentLight = $traficLights[$currentIndex];
    $currentIndex = ($currentIndex + 1) % count($traficLights);
    return $currentLight;
}

$lampu1 = getTraficLight();
echo "Lampu 1 = $lampu1 <br>";

$lampu2 = getTraficLight();
echo "Lampu 2 = $lampu2 <br>";

$lampu3 = getTraficLight();
echo "Lampu 3 = $lampu3 <br>";

$lampu4 = getTraficLight();
echo "Lampu 4 = $lampu4 <br>";

$lampu5 = getTraficLight();
echo "Lampu 5 = $lampu5 <br>";