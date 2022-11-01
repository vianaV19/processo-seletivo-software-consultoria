<?php


function SegundoMaior(array $arr){
    
    $maiores = [];

    foreach($arr as $c){
        foreach($c as $n){
            array_push($maiores, $n);
        }
    }

    sort($maiores, SORT_NUMERIC);
    
    return $maiores[count($maiores) - 2];
}

$multidimensional = array (
    array(25),
    array(10),
 
  );

echo SegundoMaior($multidimensional) ;