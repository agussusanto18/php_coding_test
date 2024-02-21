<?php 

function nilaiTerbesarKeDua($array){
    if(count($array) < 2){
        return null;
    }

    rsort($array);
    return $array[1];
}

$array = [10, 5, 2, 7, 8, 9];
echo nilaiTerbesarKeDua($array);