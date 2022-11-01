<?php

function primoAnterior(int $num){
    for($i = --$num; $i >= 0; $i--){
        if(($i % 2 != 0 || $i == 2) && ($i % 3 != 0 || $i == 3) && ($i % 5 != 0 || $i == 5) && ($i % 7 != 0 || $i == 7)){
            return $i;
        }
    }

    return null;
}

echo primoAnterior(40);