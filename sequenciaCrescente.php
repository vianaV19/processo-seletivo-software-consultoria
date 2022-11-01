<?php


function sequenciaCrescente(array $arr){
    if(count($arr) == 1) return "TRUE";
    
    $removed = false;

    sort($arr, SORT_NUMERIC);

    foreach($arr as $key => $val){

        $temp = $arr;

        if($key <= count($arr) - 2){
            if($val + 1 != $temp[$key + 1]){
                if($removed) return "FALSE";
                array_splice($temp, $key + 1, 1);
                $removed = 1;
           }
        }
    }

    return "TRUE";
}

echo sequenciaCrescente([1, 2, 3, 1, 1]);